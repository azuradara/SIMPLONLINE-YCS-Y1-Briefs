const form = document.querySelector('.res__form')

const bill = {}

form.addEventListener('click', e => {
	let inputs = document.querySelectorAll('input')
	const slc_rm_beds = document.querySelector('#slc_rm_beds')

	inputs.forEach(i => {
		label = i.closest('label')

		if (i.checked) {
			label.classList.add('ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100')
			bill[i.name] = i.value

			if (bill.rm_type === 'double' && bill.rm_beds !== 'double') {
				document.querySelector('#rm_ext').disabled = true
				document.querySelector('#rm_int').checked = true
			}

		} else {
			label.classList.remove('ring-yellow-500', 'bg-yellow-50', 'hover:bg-yellow-100')
		}
	})

	console.log(bill)
})