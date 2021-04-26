const renderRoomField = () => {
    let uniqName = `rm_${Date.now()}`
    let field = document.createElement('div')
    field.classList.add(...(('rm_field bg-white my-4 shadow-lg rounded-xl p-3 flex flex-col items-center gap-3 relative').split(' ')))
    field.id = uniqName
    field.innerHTML = /*html*/ `<img src="img/res/dlt.svg" class="absolute right-3 top-3 cursor-pointer w-5 h-5" alt=""/>`

    let containers = {
        rm_type: document.createElement('div'),
        rm_upg: document.createElement('div'),
        rm_view: document.createElement('div'),
    }

    containers.rm_type.innerHTML = renderOptRadio({
        title: 'ROOM TYPE',
        id: uniqName,
        opts: [
            {
                title: 'SIMPLE ROOM',
                img: 'img/res/single-gray.svg',
                name: 'type',
                val: 'rm_type-simple',
                rate: Rates.tax_single,
                rateMod: '$ / day'
            },
            {
                title: 'DOUBLE ROOM',
                img: 'img/res/double-gray.svg',
                name: 'type',
                val: 'rm_type-double',
                rate: Rates.tax_double,
                rateMod: '$ / day'
            },
        ]
    }).innerHTML

    let doubleRad = containers.rm_type.querySelector('input[value="rm_type-double"]')

    containers.rm_upg.innerHTML = renderOptRadio({
        title: 'BED UPGRADE',
        id: uniqName,
        opts: [
            { title: '2 SIMPLE BEDS', name: 'bed', val: 'rm_beds-two', rate: 0, rateMod: 'NO CHARGE' },
            { title: '1 KING-SIZED BED', name: 'bed', val: 'rm_beds-king', rate: 0, rateMod: 'NO CHARGE' },
        ]
    }).innerHTML

    let doubleBed = containers.rm_upg.querySelector('input[value="rm_beds-king"') ?? undefined

    containers.rm_view.innerHTML = renderOptRadio({
        title: 'VIEW',
        id: uniqName,
        opts: [
            { title: 'NO VIEW', name: 'view', val: 'rm_view-int', rate: 0, rateMod: 'NO CHARGE' },
            { title: 'EXTERIOR VIEW', name: 'view', val: 'rm_view-ext', rate: Rates.tax_view, rateMod: '% ROOM' },
        ]
    }).innerHTML

    for (c in containers) {
        containers[c].classList.add(...(('rm_opts flex flex-col w-full items-center justify-between rounded-lg gap-5').split(' ')))

        let radios = Array.from(containers[c].querySelectorAll('input[type="radio"]'))

        containers[c].addEventListener('input', () => {
            radios.forEach(o => {
                if (o.checked) {
                    o.closest('label').classList.add(...slc_classlist)
                } else {
                    o.closest('label').classList.remove(...slc_classlist)
                }
            })

            if (doubleBed.checked) {
                containers.rm_view.querySelector('input[value="rm_view-ext"]').disabled = true
                containers.rm_view.querySelector('input[value="rm_view-ext"]').closest('label').classList.add('cursor-not-allowed', 'opacity-50')
            } else {
                containers.rm_view.querySelector('input[value="rm_view-ext"]').disabled = false
                containers.rm_view.querySelector('input[value="rm_view-ext"]').closest('label').classList.remove('cursor-not-allowed', 'opacity-50')
            }

            doubleRad.checked ? field.appendChild(containers.rm_upg) : containers.rm_upg.remove()
        })

        field.appendChild(containers[c])
    }

    containers.rm_upg.remove()

    rm_container.appendChild(field)

}

const renderOptRadio = data => {
    let opt_container = document.createElement('div')
    let subcontainer = document.createElement('div')

    subcontainer.classList.add(...(('rm_opts flex w-full items-center justify-between rounded-lg gap-5').split(' ')))

    opt_container.innerHTML += /*html*/ `<p class="text-sm font-bold text-gray-600 w-full">${data.title}</p>`

    data.opts.forEach(o => {
        subcontainer.innerHTML += /*html*/
            `
		<label class="opt_1 w-full ring-2 ring-gray-200 hover:bg-gray-200 cursor-pointer justify-center rounded-md p-1 px-3 flex flex-col items-center disabled:opacity-50">
				<p class="text-sm font-semibold text-gray-400">${o.title}</p>
				${o.img ? `<img class="h-10 w-10" src="${o.img}" alt="">` : ''}
				<input class="hidden" type="radio" name="${data.id}_${o.name}" value='${o.val}'>
				<p class="text-sm text-center w-full font-bold text-gray-500">+${o.rate}<span class="text-xs text-gray-400 font-medium">  ${o.rateMod}</span></p>
		</label>
			`
    })

    opt_container.appendChild(subcontainer)

    return opt_container
}