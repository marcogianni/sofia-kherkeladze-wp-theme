// Base
import collector from './base/Collector'
import layout from './base/Layout'
import router from './base/Router'

// Components
import InView from './components/InView'
import LazyLoad from './components/LazyLoad'
import Gallery from './components/Gallery'
import Contact from './components/Contact'
import Map from './components/Map'
import ScrollBar from './components/ScrollBar'
import MobileMenu from './components/MobileMenu'

import { TweenLite, Power3 } from 'gsap'

import {
	homeTransitions,
	galleryTransitions,
	contactsTransitions,
} from './transitions/TransitionDefault'

// Other
import { debounce, loadScript } from './util'

class Application {
	constructor() {
		this.init()
	}

	checkFeaturesSupport() {
		return !!window.IntersectionObserver
	}

	init() {
		router.init()
		window.addEventListener('load', () => {
			onFirstLoad()
			if (this.checkFeaturesSupport()) {
				this.start()
			} else {
				loadScript(`${templateUrl}/assets/polyfills.js`, () => {
					this.start()
				})
			}
		})

		window.addEventListener(
			'resize',
			debounce(() => {
				layout.update()

				collector.map('resize')
			}, 200)
		)
	}

	start() {
		layout.update()
		collector.add('inview', new InView())
		collector.add('lazyLoad', new LazyLoad())
		collector.add('gallery', new Gallery())
		collector.add('contact', new Contact())
		collector.add('map', new Map())
		collector.add('scrollbar', new ScrollBar())
		collector.add('menu-mobile', new MobileMenu())
	}
}

// to set animation when page il loaded
const onFirstLoad = () => {
	const pageName = document
		.querySelector('[data-router-view]')
		.getAttribute('data-router-view')

	removeLoader()

	setTimeout(function () {
		switch (pageName) {
			case 'home_page': {
				homeTransitions()
			}
			case 'the_gallery_page': {
				galleryTransitions()
			}
			case 'contacts_page': {
				contactsTransitions()
			}
		}
	}, 2000)
}

const removeLoader = () => {
	const loader = document.querySelector('.loader')

	setTimeout(function () {
		TweenLite.to(loader, {
			y: '100%',
			duration: 0.9,
			ease: Power3.easeIn,
		})
	}, 1000)
}

new Application()
