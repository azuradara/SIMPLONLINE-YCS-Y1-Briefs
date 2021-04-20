window.addEventListener('load', () => {
	const addButton = document.querySelector('#add-entry')

	const tables = {
		assTable : document.querySelector('#assignmenttable'),
		studentTable : document.querySelector('#studenttable'),
	}

	const tabs = {
		assTab : document.querySelector('#asstab-btn'),
		studentTab : document.querySelector('#studenttab-btn'),
	}
	
	purgeActiveTables()
	tables.assTable.style.display = 'flex'

	tabs.assTab.addEventListener('click', () => {
		purgeActiveClass();
		tabs.assTab.classList.add('tab__active')

		purgeActiveTables()
		tables.assTable.style.display = 'flex'

		addButton.style.display = 'inline-block'
	})

	tabs.studentTab.addEventListener('click', () => {
		purgeActiveClass();
		tabs.studentTab.classList.add('tab__active')
		purgeActiveTables()
		tables.studentTable.style.display = 'table'

		addButton.style.display = 'none'
	})

	function purgeActiveClass() {
		tabs.assTab.classList.remove('tab__active')
		tabs.studentTab.classList.remove('tab__active')
	}

	function purgeActiveTables() {
		tables.assTable.style.display = 'none'
		tables.studentTable.style.display = 'none'
	}
})