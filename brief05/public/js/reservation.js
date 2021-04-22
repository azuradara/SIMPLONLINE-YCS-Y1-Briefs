const form = document.querySelector('.res__form')

const bill = {}

form.addEventListener('click', e => {
	let inputs = document.querySelectorAll('input')

	inputs.forEach(i => {
		label = i.closest('label')

		if (i.checked) {
			bill[i.name] = i.value
			label.classList.add('ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100')
		} else {
			label.classList.remove('ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100')
		}
	})

	if (bill.rm_type === 'single') {
		createSlc('rm', 'view', ['Interior', 'Exterior'], form)
	}

	console.log(bill)
})

const createSlc = (sub, name, opts = [], parentEl) => {
	let slc = document.createElement('div')
	slc.id = `${sub}_${name}`
	slc.className = 'font-regular text-lg flex gap-5 items-center mx-auto w-max'

	opts.forEach(o => {
		slc.innerHTML += `
	<label
		class="ring-2 shadow-lg ring-gray-200 hover:bg-gray-100 cursor-pointer justify-between rounded-lg h-28 w-28 p-1 px-3 flex flex-col items-center"
		for="${o}}">
		<p class="text-sm font-semibold text-gray-400">${o}</p>
		<input class="hidden" type="radio" id="${o}" name="${slc.id}" value="${o}">
		<img class="h-10 w-10" src="img/res/${o}.svg" alt="">
	</label>
		`
	})

	parentEl.append(slc)
}