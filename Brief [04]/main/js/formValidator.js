document.addEventListener('DOMContentLoaded', () => {
	const inputs = document.querySelectorAll('input')

	const emailInput = document.querySelector('#email')
	const pwd = document.querySelector('#pwd')
	const pwdR = document.querySelector('#pwdrepeat')

	Array.from(inputs).forEach((input) => {
		input.addEventListener('keyup', () => {
			if (!notVoid(input.value)) {
				input.classList.add('invalid-input')
			} else {
				input.classList.remove('invalid-input')
			}
		})
	})

	emailInput.addEventListener('keyup', () => {
		isEmail(emailInput)
	})

	pwd.addEventListener('keyup', () => {
		checkMismatch()
	})
	pwdR.addEventListener('keyup', () => {
		checkMismatch()
	})

	function isEmail(eMail) {
		let regEx = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		regEx.test(String(eMail).toLowerCase())
	
		if (!regEx.test(String(eMail.value).toLowerCase())) {
			emailInput.classList.add('invalid-input')
		} else {
			emailInput.classList.remove('invalid-input')
		}
	}

	function notVoid(value) {
		if (value == null || typeof value == 'undefined') return false
	
		return (value.length > 0)
	}

	function checkMismatch() {
		if (pwd.value == pwdR.value) {
			pwd.classList.remove('invalid-input')
			pwdR.classList.remove('invalid-input')
			// console.log(pwd)
		} else {
			pwd.classList.add('invalid-input')
			pwdR.classList.add('invalid-input')
			// console.log(pwd)
		}
	}
})

