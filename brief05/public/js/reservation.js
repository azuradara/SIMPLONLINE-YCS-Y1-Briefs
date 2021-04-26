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
			let data = {
				kd_opt: Azura.getChecked(c)
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