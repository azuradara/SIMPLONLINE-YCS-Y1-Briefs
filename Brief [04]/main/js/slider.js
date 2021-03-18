var slider = null
var slides = null

window.addEventListener('load', () => {
	slider = document.querySelector('.slider-container'),
		slides = Array.from(document.querySelectorAll('.slide'))
	// console.log('ye')

	let isDragging = false,
		startPos = 0,
		currentTranslate = 0,
		prevTranslate = 0,
		animationID = 0,
		currentIndex = 0

	slides.forEach((slide, index) => {
		const slideImages = Array.from(slide.querySelectorAll('img'))
		slideImages.forEach(() => addEventListener('dragstart', (e) => e.preventDefault()))

		slide.addEventListener('touchstart', touchStart(index))
		slide.addEventListener('touchEnd', touchEnd)
		slide.addEventListener('touchmove', touchMove)

		slide.addEventListener('mousedown', touchStart(index))
		slide.addEventListener('mouseup', touchEnd)
		slide.addEventListener('mouseleave', touchEnd)
		slide.addEventListener('mousemove', touchMove)
	})

	window.oncontextmenu = function (event) {
		event.preventDefault()
		event.stopPropagation()
		return false
	}

	function touchStart(index) {
		return function (event) {
			currentIndex = index
			startPos = getPositionX(event)
			isDragging = true

			animationID = requestAnimationFrame(animation)
			slider.classList.add('grabbing')
		}
	}

	function touchEnd() {
		isDragging = false
		cancelAnimationFrame(animationID)

		const movedBy = currentTranslate - prevTranslate

		if (movedBy < -100 && currentIndex < slides.length - 1) {
			currentIndex++
		}

		if (movedBy > 100 && currentIndex > 0) {
			currentIndex--
		}

		setPosByIndex()

		slider.classList.remove('grabbing')
	}

	function touchMove() {
		if (isDragging) {
			const currentPosition = getPositionX(event)
			currentTranslate = prevTranslate + currentPosition - startPos
		}
	}

	function getPositionX(event) {
		return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX
	}

	function animation() {
		setSliderPosition()
		if (isDragging) requestAnimationFrame(animation)
	}

	function setSliderPosition() {
		slider.style.transform = `translateX(${currentTranslate}px)`
	}

	function setPosByIndex() {
		currentTranslate = currentIndex * -window.innerWidth
		prevTranslate = currentTranslate
		setSliderPosition()
	}
})