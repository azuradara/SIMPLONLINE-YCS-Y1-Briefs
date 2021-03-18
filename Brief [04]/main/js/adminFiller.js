window.addEventListener('load', () => {
	const crudIcon_class = document.querySelectorAll('#classtable .crud-ico')
	const modal = document.querySelector('#modal')


	Array.from(crudIcon_class).forEach((icon) => {
		icon.addEventListener('click', () => {
			const pickedClassId = icon.parentElement.firstChild.textContent
			console.log(pickedClassId)

			modal.querySelector('form').innerHTML = populateModal('ClassId','ClassName')
			renderModal()
			
			fetch('../includes/fetcher-inc.php').then((res) => res.json())
			.then(response => {
				response.find((classe) => {
					if (classe.classesId == pickedClassId) {
						modal.querySelector('#inpClassName').value = classe.classesName
						modal.querySelector('#inpClassId').value = classe.classesId
					}
				})
			}).catch(error => console.log(error))

			modal.querySelector('form').action = '../includes/crud/updateClass-inc.php'
		})
	})

	function populateModal() {
		let output = '<div class="close">&times;</div>'
		Array.from(arguments).forEach((arg) => {
			output +=
				`
			<input name="${arg}" placeholder="${arg}" type="text" id="inp${arg}">
			`
		})
		output += `<button class="btn" type="submit" name="submit">Save Changes</button>`
		output += `<button class="btn-del" type="submit" name="delete">Delete Entry</button>`
		return output
	}

	function renderModal() {
		modal.style.display = 'flex'
		modal.querySelector('.close').addEventListener('click', () => {
			modal.style.display = 'none'
		})
	}
})