const renderGuestField = () => {
    let uniqName = `ch_${Date.now()}`

    let field = document.createElement('div')

    field.classList.add(...(('child_field bg-white my-4 shadow-lg rounded-xl p-3 flex flex-col items-center gap-3').split(' ')))
    field.id = uniqName

    field.innerHTML = /*html*/ `
	<div class="flex items-center justify-between w-full">
		<p class="text-sm font-bold text-gray-600">CHILD AGE</p>
		<div
			class="btn_del p-1 ring-1 rounded-full ring-gray-200 cursor-pointer hover:bg-red-500 hover:ring-red-500 duration-200">
			<img class="h-4 duration-200" src="img/res/dlt.svg" alt="">
		</div>
	</div>

	<input type="number" min="0" max="18"
		class="rounded-lg border-transparent my-2 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
		value="" />

	<div class="child_opts flex w-full items-center justify-between gap-3">
	</div>
	`

    gst_container.appendChild(field)

    child = new Child(field, uniqName)

    field.querySelector('input[type="number"]').onkeypress = e => e.preventDefault()
    field.querySelector('input[type="number"]').onkeydown = e => {
        if (e.keyCode != 38 && e.keyCode != 40) {
            e.preventDefault()
        }
    }
    if (document.addEventListener)
        field.addEventListener('contextmenu', e => {
            e.preventDefault
        }, false);

    let btn_del = field.querySelector('.btn_del')

    btn_del.addEventListener('click', () => btn_del.closest('.child_field').remove())
    btn_del.addEventListener('mouseover', () => btn_del.querySelector('img').src = 'img/res/dlt-white.svg')
    btn_del.addEventListener('mouseout', () => btn_del.querySelector('img').src = 'img/res/dlt.svg')


    let radio = Array.from(field.querySelectorAll(`input[name="${uniqName}"]`))

    field.addEventListener('input', e => {
        let t = e.target

        if (t.matches(`input[name="${uniqName}"]`)) {
            radio.forEach(b => {
                if (b.checked) {
                    b.closest('label').classList.add(...slc_classList)
                } else {
                    b.closest('label').classList.remove(...slc_classList)
                }
            })
        }
    })
}