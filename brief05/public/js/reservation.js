const inputs = document.querySelectorAll('input')
const form = document.querySelector('.res__form')

const bill = {
	rm_type: null,
}

form.addEventListener('click', e => {

	inputs.forEach(i => {
		label = i.closest('label')

		if (i.checked) {
			bill.rm_type = i.value
			label.classList.add('ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100')
		} else {
			label.classList.remove('ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100')
		}
	})

	bill.rm_type ===


		console.log(bill)
})