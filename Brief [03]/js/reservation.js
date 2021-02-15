// suspEl = document.querySelector('#slc-transmission')
const typeEl = document.querySelector('#slc-type')
const engineEl = document.querySelector('#slc-engine')
const daysEl = document.querySelector('#slc-days')
const btn = document.querySelector('button')

// const transArr = {
// 	'Manual': ['Citadine', 'Compact', 'Utilitaire', 'Engin de Chantier'],
// 	'Auto': ['Berline', 'Camion'],
// 	'Other': ['Moto']
// }

const transArr = {
	auto: {
		text: "Automatique",
		mod: .19
	},
	manual: {
		text: "Manuelle",
		mod: 0
	},
	none: {
		text: "--",
		mod: 0
	}
}

const engineArr = {

	'Electrique': .05,

	'Hybride': .09,

	'Essence': .14,

	'Diesel': .21

}

const typeArr = {
	'Moto': {
		basePrice: 10,
		transmission: transArr.none,
		engine: ['Electrique', 'Essence']
	},

	'Citadine': {
		basePrice: 12,
		transmission: transArr.manual,
		engine: ['Electrique', 'Hybride', 'Essence', 'Diesel']
	},

	'Compact': {
		basePrice: 14,
		transmission: transArr.manual,
		engine: ['Hybride', 'Essence', 'Diesel']
	},

	'Berline': {
		basePrice: 20,
		transmission: transArr.auto,
		engine: ['Hybride', 'Essence', 'Diesel']
	},

	'Utilitaire': {
		basePrice: 16,
		transmission: transArr.manual,
		engine: ['Diesel']
	},

	'Engin de Chantier': {
		basePrice: 900,
		transmission: transArr.manual,
		engine: ['Essence', 'Diesel']
	},

	'Camion': {
		basePrice: 250,
		transmission: transArr.auto,
		engine: ['Diesel']
	}
}

window.onload = function () {
	populateOpts(typeEl, Object.keys(typeArr))

	btn.disabled = true
	btn.classList.add('btn--disabled')
}

function populateOpts(selecEl, arr) {
	let filler = document.createElement('option')
	filler.text = '~'
	filler.value = '--'
	selecEl.add(filler)

	engineEl.add(filler)

	for (x in arr) {
		let option = document.createElement('option')
		option.text = arr[x]
		option.value = arr[x]

		selecEl.add(option)
	}
}

function typeSelect() {
	for (x in engineEl.options) {
		engineEl.remove(x)
	}
	populateOpts(engineEl, typeArr[typeEl.value].engine)
}

function enableBtn() {
	if (engineEl.value != '--' && typeEl.value != '--' && daysEl.value != (null || 0)) {
		btn.disabled = false
		btn.classList.remove('btn--disabled')
	}
}
// 

class VehicleLease {
	constructor(Type, Engine, Period) {
		this.Type = typeArr[Type]
		this.Engine = engineArr[Engine]
		this.Period = Period

		this.Transmission = this.Type.transmission
		this.basePrice = this.Type.basePrice

		this.ppD = this.basePrice + (this.basePrice * this.Transmission.mod) + (this.basePrice * this.Engine)
		this.tPrice = this.ppD * Period
	}
}

// 
typeEl.onchange = function () {
	typeSelect()
}

engineEl.onchange = function() {
	enableBtn()
}

daysEl.onchange = function() {
	enableBtn()
}

function concoct() {
	const sVeh = new VehicleLease(typeEl.value, engineEl.value, daysEl.value)
	document.querySelector('.price').textContent = `${Math.round(sVeh.tPrice * 100) / 100}€`
}