window.addEventListener('load', () => {
	const addBtn = document.querySelector('#add-entry')
	form = modal.querySelector('form')

	fetch('../json/formCreationData.json').then(response => {
		return response.json()
	}).then(data => json = data)
	

	addBtn.addEventListener('click', () => {
		activeTable = addBtn.classList[0]
		
		switch (activeTable) {
			case 'add-classes':
				form.innerHTML = genFieldsNew(json.classes)
				form.action = '../includes/crud/insertManagers/class-idmg.php'
				document.querySelector(`input[name="classesId"]`).parentElement.style.display = 'none'
				renderModal()
				checkVoid()
				break;
			case 'add-teachers':
				form.innerHTML = genFieldsNew(json.teachers)
				form.action = '../includes/crud/insertManagers/teacher-idmg.php'
				document.querySelector(`input[name="usersId"]`).parentElement.style.display = 'none'
				renderModal()
				checkVoid()
				break;
			case 'add-students':
				form.innerHTML = genFieldsNew(json.students)
				form.action = '../includes/crud/insertManagers/student-idmg.php'
				document.querySelector(`input[name="usersId"]`).parentElement.style.display = 'none'
				renderModal()
				checkVoid()
				break;
			case 'add-assignments':
				form.innerHTML = genFieldsNew(json.assignments)
				form.action = '../includes/crud/insertManagers/assignment-idmg.php'
				// document.querySelector('input[name="assignmentsDesc"]').setAttribute('word-break', 'break-word')
				renderModal()
				checkVoid()
				break;
		}
	})
})

function checkVoid() {
	// let valid = false
	const inputs = Array.from(form.querySelectorAll('input'))
	form.querySelectorAll('button').forEach((button) => {
		button.disabled = true
	})

	inputs.forEach((input) => {
		if (input.parentElement.textContent.includes('Id')) {
			return
		}

		input.addEventListener('keyup', () => {
			if(!input.value == '') {
				input.classList.remove('iv-frm-btn')
			} else {
				input.classList.add('iv-frm-btn')
			}
		})
	})

	form.addEventListener('keyup', () => {
		inputs_fl = Array.from(form.querySelectorAll('input'))
		const emptyInputs = inputs_fl.filter(input => input.value == '')

		console.log(emptyInputs.length)
		if (emptyInputs.length > 1 ) {
			form.querySelectorAll('button').forEach((button) => {
				button.disabled = true
			})
		} else {
			form.querySelectorAll('button').forEach((button) => {
				button.disabled = false
			})
		}
	})
}


function genFieldsNew(data = {}) {
	let output = ''
	data.forEach((field) => {
		if (field.name == 'assignmentsDesc') {
			output += `<label for=${field.name}><p>${field.title}</p><textarea rows="10" name="${field.name}" placeholder="${field.title}" type="${field.type}"></textarea></label>`
		} else {
			output += `<label for=${field.name}><p>${field.title}</p><input name="${field.name}" placeholder="${field.title}" type="${field.type}"/></label>`
		}
	})
	output += `<div class="form-btns"><button class="btn" type="submit" name="submit"><img src="../img/app/save_white_24dp.svg" alt="save"/></button></div>`
	
	return output
}

function renderModal() {
	modal.style.display = 'flex'
	modal.querySelector('.close').addEventListener('click', () => {
		modal.style.display = 'none'
	})
	// document.querySelector('').style.overflow = 'hidden !important'
}
