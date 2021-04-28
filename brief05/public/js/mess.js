if (typeof Element.prototype.clearChildren === 'undefined') {
    Object.defineProperty(Element.prototype, 'clearChildren', {
        configurable: true,
        enumerable: false,
        value: function () {
            while (this.firstChild) this.removeChild(this.lastChild);
        }
    });
}

const slc_classList = ['ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100']

const form = document.querySelector('.res__form')
const gst_ctrl = document.querySelector('#gst_ctrl')

const gst_container = document.querySelector('#gst_container')
const rm_container = document.querySelector('#rm_container')

const gst_add = document.querySelector('#add_gst')
const rm_add = document.querySelector('#add_rm')

const res = new Reservation(form)

const slc_res_type = Array.from(document.querySelectorAll('input[name="res_guests"]'))

let hasGuests = false

const deeds = e => {
    const t = e.target


    if (t.matches('input[name="res_guests"]')) {
        slc_res_type.forEach(b => {
            if (b.checked) {
                b.closest('label').classList.add(...slc_classList)
                renderGuestField()
                hasGuests = Boolean(parseInt(b.value))
            } else {
                b.closest('label').classList.remove(...slc_classList)
            }
        })

        purgeGuests()

    }
    res.refresh()
    console.log(res)

}

const purgeGuests = () => {
    if (!hasGuests) {
        gst_ctrl.style.display = 'none'
        gst_container.clearChildren()
    } else {
        gst_ctrl.style.display = 'block'
    }
}

form.addEventListener('input', deeds)

gst_add.addEventListener('click', renderGuestField)
rm_add.addEventListener('click', renderRoomField)
