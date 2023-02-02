import collector from '../base/Collector'

class InView {
	constructor() {
		this.elements = []
		this.init()
	}

	init() {
		const els = document.querySelectorAll('[data-inview]')
		els.forEach((el) => {
			const type = el.getAttribute('data-inview')
			this.elements.push({
				type,
				el,
			})
		})
		this.initObserver()
	}

	initObserver() {
		this.observer = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting || entry.intersectionRatio > 0) {
					this.observer.unobserve(entry.target)
					const element = this.elements.find((_) =>
						_.el.isSameNode(entry.target)
					)
					if (element) {
						this.animate(element)
					}
				}
			})
		})
	}
}

export default InView
