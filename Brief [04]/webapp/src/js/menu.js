window.onload = () => {
	const menuClosed = document.querySelector('.menu-closed')
	const menu = document.querySelector('.links')

	menuClosed.onclick = () => {
		menu.classList.toggle('links-active')

		if (Array.from(menu.classList).includes('links-active')) {
			menuClosed.src = "./src/img/menu_open_white_24dp.svg"
		} else {
			menuClosed.src = "./src/img/menu_white_24dp.svg"
		}
	}

	const header = document.querySelector('header')
	const heroOne = document.querySelector('.hero')
	const heroOpts = {}
	const heroObserver = new IntersectionObserver(function (entries, heroObserver) {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				header.classList.add('hdr--trans')
			} else {
				header.classList.remove('hdr--trans')
			}
		})
	}, heroOpts);

	heroObserver.observe(heroOne)
}