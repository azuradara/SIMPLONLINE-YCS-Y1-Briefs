if (typeof Element.prototype.clearChildren === 'undefined') {
    Object.defineProperty(Element.prototype, 'clearChildren', {
        configurable: true,
        enumerable: false,
        value: function () {
            while (this.firstChild) this.removeChild(this.lastChild);
        }
    });
}

const slc_classlist = ['ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100']

const form = document.querySelector('.res__form')
const gst_ctrl = document.querySelector('#gst_ctrl')

const gst_container = document.querySelector('#gst_container')
const rm_container = document.querySelector('#rm_container')
const pn_container = document.querySelector('#pension_container')

const gst_add = document.querySelector('#add_gst')
const rm_add = document.querySelector('#add_rm')

const res = new Reservation()

const slc_res_type = Array.from(document.querySelectorAll('input[name="res_guests"]'))

let hasGuests = false

const deeds = e => {
    const t = e.target


    if (t.matches('input[name="res_guests"]')) {
        slc_res_type.forEach(b => {
            if (b.checked) {
                b.closest('label').classList.add(...slc_classlist)
                renderGuestField()
                hasGuests = Boolean(parseInt(b.value))
            } else {
                b.closest('label').classList.remove(...slc_classlist)
            }
        })

        purgeGuests()
    }

    console.table(res)
}

const purgeGuests = () => {
    if (!hasGuests) {
        gst_ctrl.style.display = 'none'
        gst_container.clearChildren()
    } else {
        gst_ctrl.style.display = 'block'
    }
}

const renderPension = async () => {
    await Rates.refresh()

    pn_container.innerHTML = /*html*/
        `
        <label
            class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-full p-1 px-3 flex flex-col items-center">
            <p class="text-sm font-semibold text-gray-400">NONE</p>
            <input class="hidden" type="radio" name="res_pension" value='0'>
            <img class="h-10 w-10" src="img/res/pnone.svg" alt="">
            <p class="text-sm text-center w-full font-bold text-gray-500">+0<span
                    class="text-xs text-gray-400 font-medium">  NO CHARGE</span></p>
        </label>

        <label
            class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-full p-1 px-3 flex flex-col items-center">
            <p class="text-sm font-semibold text-gray-400">SEMI</p>
            <input class="hidden" type="radio" name="res_pension" value='semi'>
            <img class="h-10 w-10" src="img/res/semi.svg" alt="">
            <p class="text-sm text-center w-full font-bold text-gray-500">+${Rates.tax_pension_semi}<span
                    class="text-xs text-gray-400 font-medium"> $ / day</span></p>
        </label>

        <label
            class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-full p-1 px-3 flex flex-col items-center">
            <p class="text-sm font-semibold text-gray-400">BF & LUNCH</p>
            <input class="hidden" type="radio" name="res_pension" value='full_bk_lunch'>
            <img class="h-10 w-10" src="img/res/lunch.svg" alt="">
            <p class="text-sm text-center w-full font-bold text-gray-500">+${Rates.tax_pension_full}<span
                    class="text-xs text-gray-400 font-medium"> $ / day</span></p>
        </label>

        <label
            class="ring-2 bg-white shadow-lg ring-gray-200 hover:bg-gray-200 cursor-pointer justify-between rounded-lg h-18 w-full p-1 px-3 flex flex-col items-center">
            <p class="text-sm font-semibold text-gray-400">BF & DINNER</p>
            <input class="hidden" type="radio" name="res_pension" value='full_bk_dinner'>
            <img class="h-10 w-10" src="img/res/dinner.svg" alt="">
            <p class="text-sm text-center w-full font-bold text-gray-500">+${Rates.tax_pension_full}<span
                    class="text-xs text-gray-400 font-medium"> $ / day</span></p>
        </label>
    `

    let radios = pn_container.querySelectorAll('input[type="radio"]')

    pn_container.addEventListener('input', () => {
        radios.forEach(o => {
            if (o.checked) {
                o.closest('label').classList.add(...slc_classlist)
            } else {
                o.closest('label').classList.remove(...slc_classlist)
            }
        })
    })

}

form.addEventListener('input', deeds)

gst_add.addEventListener('click', renderGuestField)
rm_add.addEventListener('click', renderRoomField)

renderPension()