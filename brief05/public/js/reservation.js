class Reservation {
	constructor(form) {
		this.form = form
		this.refresh()
	}

	refresh() {
		this.setChildren()
	}

	setChildren() {
		this.children = []

		let set = Array.from(this.form.querySelectorAll('.child_field'))
		set.forEach(c => {
			let arr = Azura.getChecked(c)?.split('-')


			data = {
				[arr[0]]: arr[1]
			}

			this.children.push(data)
		})
	}

	setRooms() {
		this.rooms = []

		let rm_set = Array.from(this.form.querySelectorAll(''))

		rm_set.forEach(rm => {

			let opts = Array.from(rm.querySelectorAll('.rm_opts'))

			opts.forEach('')

		})
	}
}