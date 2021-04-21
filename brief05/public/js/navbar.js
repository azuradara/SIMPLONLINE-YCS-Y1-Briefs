const mn_btn_closed = document.querySelector('#mn_btn_closed')
const mn_btn_open = document.querySelector('#mn_btn_open')
const mobile_menu = document.querySelector('#mobile_menu')

mn_btn_closed.addEventListener('click', () => {
	mobile_menu.classList.remove('hidden')
	mn_btn_closed.classList.add('hidden')
	mn_btn_open.classList.remove('hidden')
})
mn_btn_open.addEventListener('click', () => {
	mobile_menu.classList.add('hidden')
	mn_btn_open.classList.add('hidden')
	mn_btn_closed.classList.remove('hidden')
})

const usr_menu_btn = document.querySelector('#usr_menu_btn')
const usr_menu = document.querySelector('#usr_menu')

usr_menu_btn.addEventListener('click', () => {
	usr_menu.classList.toggle('hidden')
})