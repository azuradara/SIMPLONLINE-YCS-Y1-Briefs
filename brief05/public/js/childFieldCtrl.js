class Child {
    static RANGES = [
        { range: [0, 2], subcat: 1 },
        { range: [3, 14], subcat: 2 },
        { range: [15, 18], subcat: 3 }
    ]

    constructor(el, id) {

        this.OPTS = {
            1: [
                {
                    imgSrc: 'img/res/bed-baby.svg',
                    title: 'BABY BED ADD-ON',
                    rate: Rates.tax_baby_bed,
                    rateMod: '% SINGLE ROOM',
                    val: 'ch_opt-baby_bed'
                },
                {
                    imgSrc: 'img/res/nae.svg',
                    title: 'NO ADD-ON',
                    rate: 0,
                    rateMod: 'NO CHARGE',
                    val: 'ch_opt-none'
                }
            ],
            2: [
                {
                    imgSrc: 'img/res/single-gray.svg',
                    title: 'BED ADD-ON',
                    rate: Rates.tax_child_bed,
                    rateMod: '% SINGLE ROOM',
                    val: 'ch_opt-child_bed'
                },
            ],
            3: [
                {
                    imgSrc: 'img/res/room.svg',
                    title: 'SIMPLE ROOM',
                    rate: Rates.tax_single,
                    rateMod: '$ / day',
                    val: 'ch_opt-single'
                },
                {
                    imgSrc: 'img/res/single-gray.svg',
                    title: 'BED ADD-ON',
                    rate: Rates.tax_teen_bed,
                    rateMod: '% SINGLE ROOM',
                    val: 'ch_opt-teen_bed'
                }
            ],
        }

        this.id = id

        this.field = el
        this.ageEl = el.querySelector('input[type="number"]')
        this.optsEl = el.querySelector('.child_opts')
        this.field.addEventListener('input', this.renderField.bind(this))
    }

    renderField(e) {
        let t = e.target

        // console.log(this.field)

        if (t.matches('input[type="number"]')) {
            this.age = this.ageEl.value
            this.renderOpts(this.OPTS[`${this.subcat()}`])
        }
    }

    subcat() {
        let s = 0

        Child.RANGES.forEach(r => {
            if (Azura.between(this.age, ...r.range)) {
                s = r.subcat
            }
        })

        return s
    }

    renderOpts(args = [{
        imgSrc: 'img/res/bed-baby.svg',
        title: 'BABY BED ADD-ON',
        rate: 20,
        rateMod: '% single',
        val: ''
    }, {}]) {
        let div = document.createElement('div')

        args.forEach(a => {
            let l = document.createElement('label')
            l.classList.add(...(('opt_1 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center').split(' ')))

            l.innerHTML = /*html*/ `
				<p class="text-sm font-semibold text-gray-400">${a.title}</p>
				<img class="h-10 w-10" src="${a?.imgSrc}" alt="">
				<input class="hidden" type="radio" name="${this.id}" value='${a.val}'>
				<p class="text-sm text-center w-full font-bold text-gray-500">+${a.rate}
				<span class="text-xs text-gray-400 font-medium"> ${a.rateMod} </span>
				</p>
				`

            div.appendChild(l)
        })

        this.optsEl.innerHTML = div.innerHTML

        let opts = Array.from(this.optsEl.querySelectorAll('input[type="radio"]'))

        this.optsEl.addEventListener('input', () => {
            opts.forEach(o => {
                if (o.checked) {
                    o.closest('label').classList.add(...slc_classList)
                } else {
                    o.closest('label').classList.remove(...slc_classList)
                }
            })
        })
    }


}