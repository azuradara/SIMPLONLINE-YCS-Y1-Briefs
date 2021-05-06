class Reservation {
    constructor(form) {
        this.form = form
        this.refresh()
    }

    refresh() {
        Rates.refresh().then(() => {
            this.ratesId = Rates.rates_id
        })

        this.setChildren()
        this.setRooms()

        this.removePushBtn()
    }

    setChildren() {
        this.children = []

        let set = Array.from(this.form.querySelectorAll('.child_field'))
        set.forEach(c => {
            let arr = Azura.getChecked(c)?.split('-') ?? []

            let data = {
                [arr[0]]: arr[1]
            }

            this.children.push(data)
        })
    }

    setRooms() {
        this.rooms = []

        let rm_set = Array.from(this.form.querySelectorAll('.rm_field'))


        rm_set.forEach(rm => {
            let data = {}
            let opts = Array.from(rm.querySelectorAll('.rm_opts'))

            opts.forEach(o => {
                let arr = Azura.getChecked(o)?.split('-') ?? []
                data[arr[0]] = arr[1]

                data.rm_beds = data.rm_beds ?? 'none'
            })

            this.rooms.push(data)
        })
    }

    // setPension() {
    //     let pn_set = this.form.querySelector('#slc_pension')
    //     let arr = Azura.getChecked(pn_set)?.split('-') ?? []
    //     this.pension = { [arr[0]]: arr[1] }
    // }

    async setRates() {
        await Rates.refresh()
        this.ratesId = Rates.rates_id
    }

    async check() {
        this.refresh()
        let json = JSON.stringify(this)
        console.log(json)

        await postData('/validateres', json).then(res => {
            this.error(res)
        });
    }

    async push() {
        this.refresh()
        let json = JSON.stringify(this)
        await postData('/pushres', json).then(res => {
            this.error(res) ? window.location.replace('/profile') : null
        })
    }

    error(res, msg) {
        let cart = document.querySelector('#cart_total')
        if (res.error !== null) {
            cart.innerHTML = `<div class="text-lg text-center w-prose py-3 text-red-600">There has been an issue with your reservation.</br>Please review your form and try again.</div>`
            this.removePushBtn()
            return false
        }

        cart.innerHTML =
            '<div class="flex items-center justify-between">' +
            `<div class="font-bold text-gray-600 text-lg">TOTAL</div>` +
            `<div>${new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(res.data.total)} / day</div>` +
            '</div>'
        this.renderPushBtn()
        return true
    }

    removePushBtn() {
        document.querySelector('#btnPushRes')?.remove()
    }

    renderPushBtn() {
        let btn = document.createElement('div')
        btn.id = 'btnPushRes'
        btn.innerHTML = '<button type="button" onclick="res?.push()"' +
            'class="relative my-4 py-2 px-4 mx-auto lg:mx-0 flex justify-center items-center bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-500 focus:ring-offset-yellow-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-md ">\n' +
            'MAKE RESERVATION' +
            '</button>'

        let cartContainer = document.querySelector('#cart__container')
        cartContainer.appendChild(btn)
    }
}