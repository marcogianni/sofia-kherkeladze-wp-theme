import collector from './Collector'
import Highway from '@dogstudio/highway'
import TransitionDefault from '../transitions/TransitionDefault'
import Scrollbar from '../components/ScrollBar'

class Router {
	constructor() {
		this.locations = {}
	}

	prefetch(href) {
		fetch(href, {
			mode: 'same-origin',
			method: 'GET',
			headers: {
				'X-Requested-With': 'Highway',
			},
			credentials: 'same-origin',
		}).then((response) => {
			if (response.status >= 200 && response.status < 300) {
				this.locations[href] = true
			}
		})
	}

	onMouseEnter = (e) => {
		if (!this.locations[e.currentTarget.href]) {
			this.prefetch(e.currentTarget.href)
		}
		e.currentTarget.removeEventListener('mouseenter', this.onMouseEnter)
	}

	exposePrefetch() {
		this.instance.links.forEach((el) => {
			if (!this.locations[el.href]) {
				el.addEventListener('mouseenter', this.onMouseEnter)
			}
		})
	}

	getLocations() {
		this.instance.links.forEach((el) => {
			if (!this.locations.hasOwnProperty(el.href)) {
				this.locations[el.href] = false
			}
		})
	}

	updatePage() {
		console.log('updatePage')
		this.page = this.instance.properties.slug
	}

	init() {
		this.instance = new Highway.Core({
			transitions: {
				default: TransitionDefault,
			},
		})

		this.updatePage()
		this.getLocations()
		this.exposePrefetch()

		this.instance.on('NAVIGATE_OUT', () => {
			collector.map('destroy')
		})

		this.instance.on('NAVIGATE_IN', () => {
			this.updatePage()
		})

		this.instance.on('NAVIGATE_END', () => {
			setTimeout(() => {
				collector.map('reinit')
			}, 50)
		})
	}
}

const router = new Router()
export default router
