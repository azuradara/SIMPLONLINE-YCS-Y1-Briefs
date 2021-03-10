const modalBox = document.createElement("modal")

window.onload = () => {
	const infoButton = document.querySelectorAll('.btn--info')

	Array.from(infoButton).forEach((btn) => {
		btn.addEventListener('click', () => {
			if (Array.from(btn.classList).includes('studinfo')) {
				generateModal(studHtmlVar)
				renderModal()
			}
		})
	})
}

const generateModal = (htmlVar) => {
	modalBox.style.display = 'none'
	modalBox.innerHTML = htmlVar
}

const renderModal = () => {
	document.querySelector('html').appendChild(modalBox)
	modalBox.style.display = 'block'
	document.querySelector('.app').style.overflow = 'hidden'

	const fields = modalBox.querySelectorAll('input, select')

	Array.from(fields).forEach((field) => {
		field.disabled = true

		field.parentElement.addEventListener('click', () => {
			field.disabled = false
		})
	})
}

const studHtmlVar = `<div class="modalbox"><div class="modalcontent"><form action="return false"><label for="entryID">ID<input type="text" name="entryID" id="entryID"></label><label for="entryFName">First Name<input type="text" name="entryFName" id="entryFName"></label><label for="entryLName">Last Name<input type="text" name="entryLName" id="entryLName"></label><label for="entryEmail">E-Mail<input type="text" name="entryEmail" id="entryEmail"></label><label for="entryAddress">Address<input type="text" name="entryAddress" id="entryAddress"></label><label for="entryPassword">Password<input type="text" name="entryPassword" id="entryPassword"></label><label for="entryClass">Enrolled Class<select name="entryClass" id="entryClass"><option value="">1</option><option value="">2</option><option value="">3</option><option value="">4</option></select></label><button action="return false" class="btn--save">SAVE CHANGES</button><p>Delete Entry?</p></form></div></div>`