const fields = {}

class Contact {
	constructor(Name, Email, Subject, Message, Newsletter) {
		this.Name = Name
		this.Email = Email
		this.Subject = Subject
		this.Message = Message
		this.Newsletter = Newsletter
	}
}

document.addEventListener('DOMContentLoaded', () => {
	fields.Name = document.getElementById('frm__Name')
	fields.Email = document.getElementById('frm__Email')
	fields.Subject = document.getElementById('frm__Subject')
	fields.Message = document.getElementById('frm__Message')
	fields.Newsletter = document.getElementById('frm__Newsletter')
})

function notVoid(value) {
	if (value == null || typeof value == 'undefined') return false

	return (value.length > 0)
}

function isEmail(Email) {
	let regEx = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regEx.test(String(Email).toLowerCase());
}

function fieldValidation(field, validationFunc) {
	if (field == null) {return false}

	let isFieldValid = validationFunc(field.value)
	if (!isFieldValid) {
		
		let warning = field.parentNode.firstChild
		
		field.style.border = '2px solid red'
		if (field.type == 'email') {
			warning.textContent = 'Invalid E-mail'
		} else warning.textContent = 'Field cannot be empty'
	} else {
		field.className = ''
	}

	return isFieldValid
}

function Validate() {
	let valid = true

	valid &= fieldValidation(fields.Name, notVoid)
	valid &= fieldValidation(fields.Email, isEmail)
	valid &= fieldValidation(fields.Subject, notVoid)
	valid &= fieldValidation(fields.Message, notVoid)

	return valid
}

document.querySelector('.close').addEventListener('click', () => {
	document.querySelector('#modal').style.display = 'none'
})

function vAndCreate() {
	if (!Validate()) {
		return false
	}

	else {
		const { Name, Email, Subject, Message } = fields		
		const cntc = new Contact(Name.value, Email.value, Subject.value, Message.value, fields.Newsletter.checked)

		const nameDisp = document.querySelector('#disp-name')
		const emailDisp = document.querySelector('#disp-email')
		const subjectDisp = document.querySelector('#disp-subject')
		const messageDisp  = document.querySelector('#disp-message')
		
		nameDisp.textContent = cntc.Name
		emailDisp.textContent = cntc.Email
		subjectDisp.textContent = cntc.Subject
		messageDisp.textContent = cntc.Message


		document.querySelector('#modal').style.display = 'block'

	}
}