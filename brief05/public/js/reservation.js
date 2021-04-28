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

        await postData('/validateres', json).then(res => console.log(res))
    }
}