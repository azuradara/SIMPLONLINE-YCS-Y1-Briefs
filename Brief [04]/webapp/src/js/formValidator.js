window.onload = () => {
	const emailFields = Array.from(document.querySelectorAll('.email input'))
	emailFields.forEach((emailField) => {
		emailField.addEventListener('keyup', () => {
			if (IsEmail(emailField.value) == false) {
				const smalltext = emailField.parentElement.querySelector('.smalltext')

				smalltext.style.display = 'block'
				smalltext.style.color = 'crimson'
				smalltext.textContent = 'This is not a valid e-mail'

				emailField.style.border = '1px solid crimson'
			} else {
				const smalltext = emailField.parentElement.querySelector('.smalltext')

				smalltext.style.display = 'block'
				smalltext.style.color = '#0288D1'
				smalltext.textContent = 'Looks good!'

				emailField.style.border = '2px solid #0288D1'
			}
		})
	})
}

function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!regex.test(email)) {
	  return false;
	} else {
	  return true;
	}
  }