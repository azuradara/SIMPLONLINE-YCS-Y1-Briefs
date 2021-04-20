let classTable = {},
	teacherTable = {},
	studentTable = {},
	modal = {},
	crudIcons = {},
	json = {}

window.addEventListener('load', () => {

	classTable = document.querySelector('#classtable')
	teacherTable = document.querySelector('#teachertable')
	studentTable = document.querySelector('#studenttable')

	modal = document.querySelector('#modal')
	form = modal.querySelector('form')
	crudIcons = document.querySelectorAll('table .crud-ico')

	fetch('../json/formCreationData.json').then(response => {
		return response.json()
	}).then(data => json = data)

	Array.from(crudIcons).forEach((icon) => {
		icon.addEventListener('click', () => {
			activeTable = icon.closest('table')
			var selectedId = {}
			
			
			switch (activeTable.id) {
				case 'classtable':
					selectedId = icon.closest('tr').firstChild.textContent

					form.innerHTML = genFields(json.classes)
					form.action = '../includes/crud/updateManagers/class-udmg.php'
					document.querySelector(`input[name="classesId"]`).parentElement.style.display = 'none'

					postData('../includes/crud/fetchManager.php', JSON.stringify(`SELECT * FROM classes WHERE classesId = ${selectedId}`))
						.then(response => {
							const data = response.data[0]
							console.log(data)

							for (let i in json.classes) {
								form.querySelector(`input[name="${json.classes[i].name}"]`).value = data[`${json.classes[i].name}`]
							}
							// form.querySelector('input[name="classesId"]').value = data.classesId
							// form.querySelector('input[name="classesName"]').value = data.classesName
						})

					renderModal()
					checkVoidOnUpdate()
					break;
				case 'teachertable':
					selectedId = icon.closest('tr').firstChild.textContent

					form.innerHTML = genFields(json.teachers)
					form.action = '../includes/crud/updateManagers/teacher-udmg.php'
					document.querySelector(`input[name="usersId"]`).parentElement.style.display = 'none'

					postData('../includes/crud/fetchManager.php', JSON.stringify(`SELECT \`users\`.*, \`teachers\`.* FROM \`users\` LEFT JOIN \`teachers\` ON \`teachers\`.\`teachersId\` = \`users\`.\`usersId\` WHERE \`teachers\`.\`teachersId\` = ${selectedId}`))
						.then(response => {
							const data = response.data[0]
							console.log(data)

							for (let i in json.teachers) {
								form.querySelector(`input[name="${json.teachers[i].name}"]`).value = data[`${json.teachers[i].name}`]
							}
							// form.querySelector('input[name="classesId"]').value = data.classesId
							// form.querySelector('input[name="classesName"]').value = data.classesName
						})
					renderModal()
					checkVoidOnUpdate()
					break;
				case 'studenttable':
					selectedId = icon.closest('tr').firstChild.textContent

					form.innerHTML = genFields(json.students)
					form.action = '../includes/crud/updateManagers/student-udmg.php'
					document.querySelector(`input[name="usersId"]`).parentElement.style.display = 'none'

					postData('../includes/crud/fetchManager.php', JSON.stringify(`SELECT \`users\`.*, \`students\`.* FROM \`users\` LEFT JOIN \`students\` ON \`students\`.\`studentsId\` = \`users\`.\`usersId\` WHERE \`students\`.\`studentsId\` = ${selectedId}`))
						.then(response => {
							const data = response.data[0]
							console.log(data)

							for (let i in json.students) {
								form.querySelector(`input[name="${json.students[i].name}"]`).value = data[`${json.students[i].name}`]
							}
							// form.querySelector('input[name="classesId"]').value = data.classesId
							// form.querySelector('input[name="classesName"]').value = data.classesName
						})

					renderModal()
					checkVoidOnUpdate()
					break;
			}
		})
	})
})

function checkVoidOnUpdate() {
	// let valid = false
	const inputs = Array.from(form.querySelectorAll('input'))

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
		if (emptyInputs.length > 0) {
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

function genFields(data = {}) {
	let output = ''
	data.forEach((field) => {
		output += `<label for=${field.name}><p>${field.title}</p><input name="${field.name}" placeholder="${field.title}" type="${field.type}"/></label>`
	})
	output += `<div class="form-btns"><button class="btn" type="submit" name="submit"><img src="../img/app/save_white_24dp.svg" alt="save"/></button>`
	output += `<button class="btn btn--del" type="submit" name="delete"><img src="../img/app/delete_white_24dp.svg" alt="save"/></button></div>`
	
	return output
}

function renderModal() {
	modal.style.display = 'flex'
	modal.querySelector('.close').addEventListener('click', () => {
		modal.style.display = 'none'
	})
	// document.querySelector('').style.overflow = 'hidden !important'
}

async function postData(url = '', data = {}) {
	const response = await fetch(
		url, {
			method: 'post',
			headers: {
				'Content-Type': 'application/json',
				'Accept': 'application/json',
			},
			body: JSON.stringify(data),
		},
	)

	return response.json()
}
