window.addEventListener('load', () => {
	const tables = {
		classTable : document.querySelector('#classtable'),
		teacherTable : document.querySelector('#teachertable'),
		studentTable : document.querySelector('#studenttable'),
	}

	const tabs = {
		classTab : document.querySelector('#classtab-btn'),
		teacherTab : document.querySelector('#teachertab-btn'),
		studentTab : document.querySelector('#studenttab-btn'),
	}
	
	purgeActiveTables()
	tables.classTable.style.display = 'table'

	tabs.classTab.addEventListener('click', () => {
		purgeActiveClass();
		tabs.classTab.classList.add('tab__active')

		purgeActiveTables()
		tables.classTable.style.display = 'table'
	})

	tabs.teacherTab.addEventListener('click', () => {
		purgeActiveClass();
		tabs.teacherTab.classList.add('tab__active')
		purgeActiveTables()
		tables.teacherTable.style.display = 'table'
	})

	tabs.studentTab.addEventListener('click', () => {
		purgeActiveClass();
		tabs.studentTab.classList.add('tab__active')
		purgeActiveTables()
		tables.studentTable.style.display = 'table'
	})

	function purgeActiveClass() {
		tabs.classTab.classList.remove('tab__active')
		tabs.teacherTab.classList.remove('tab__active')
		tabs.studentTab.classList.remove('tab__active')
	}

	function purgeActiveTables() {
		tables.classTable.style.display = 'none'
		tables.teacherTable.style.display = 'none'
		tables.studentTable.style.display = 'none'
	}

})