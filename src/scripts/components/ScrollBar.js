import Scrollbar from 'smooth-scrollbar'

class ScrollBar {
	constructor() {
		this.init()
	}

	init() {
		const scrollbars = document.querySelectorAll('#scrollbar')
		const el = document.querySelector('#scrollbar')
		const options = {
			damping: 0.15,
			renderByPixels: true,
			thumbMinSize: 20,
			continuousScrolling: true,
			alwaysShowTracks: false,
		}
		if (el && window.screen.width >= 576) {
			console.log('ACTIVE')
			Scrollbar.init(el, options)
		} else {
			Scrollbar.destroyAll()
			scrollbars.forEach((single) => {
				single.style.overflow = 'scroll'
			})
		}
	}

	reinit() {
		this.init()
	}
}

export default ScrollBar
