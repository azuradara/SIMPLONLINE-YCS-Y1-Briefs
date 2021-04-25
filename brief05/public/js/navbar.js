const mn_btn_closed = document.querySelector('#mn_btn_closed')
const mn_btn_open = document.querySelector('#mn_btn_open')
const mobile_menu = document.querySelector('#mobile_menu')

const toggleBurger = () => {
    mobile_menu.classList.toggle('hidden')
    mn_btn_open.classList.toggle('hidden')
    mn_btn_closed.classList.toggle('hidden')
}

mn_btn_closed.addEventListener('click', toggleBurger)
mn_btn_open.addEventListener('click', toggleBurger)

const usr_menu_btn = document.querySelector('#usr_menu_btn')
const usr_menu = document.querySelector('#usr_menu')

usr_menu_btn && usr_menu_btn.addEventListener('click', () => {
    usr_menu.classList.toggle('hidden')
})