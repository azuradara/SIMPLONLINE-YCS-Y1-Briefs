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
	if (field == null) return flase

	let isFieldValid = validationFunc(field.value)
	if (!isFieldValid) {
		field.className = 'invalid-field'
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

function vAndCreate() {
	if (!Validate()) alert("An error occured~")

	else {
		let cntc = new Contact(fields.Name.value, fields.Email.value, fields.Subject.value, fields.Message.value, fields.Newsletter.checked)

		alert(`${cntc.Name} thanks for contacting us! We'll get back to you soon.`)
	}
}