import Highway from '@dogstudio/highway'
import {
	TweenLite,
	TimelineMax,
	Linear,
	Back,
	Sine,
	Tween,
	EasePack,
	Power3,
	gsap,
} from 'gsap'

import { CSSRulePlugin } from 'gsap/CSSRulePlugin'

export default class TransitionDefault extends Highway.Transition {
	in({ from, to, trigger, done }) {
		let pageTo = to.getAttribute('data-router-view')

		from.remove()
		window.scrollTo(0, 0)

		switch (pageTo) {
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
		done()
	}

	out({ from, trigger, done }) {
		done()
	}
}

export const homeTransitions = () => {
	gsap.registerPlugin(CSSRulePlugin)

	const image = document.querySelector('.c-hero-home__img')
	const titleAfter = CSSRulePlugin.getRule('.c-hero-home__title:after')

	console.log('titleAfter', { titleAfter, gsap, image })

	if (image && titleAfter) {
		//  not working
		gsap.to(titleAfter, {
			duration: 0,
			cssRule: { x: '0%' },
		})

		gsap.to(titleAfter, {
			duration: 1.5,
			ease: Power3.easeInOut,
			cssRule: { x: '105%' },
		})

		TweenLite.to(image, {
			x: '0',
			opacity: 1,
			duration: 2,
			delay: 0.4,
			ease: Power3.easeInOut,
		})
	}
}

export const galleryTransitions = () => {
	const title = document.querySelector('.c-hero-the-gallery__title')
	const bg = document.querySelector('.c-hero-the-gallery')

	if (title && bg) {
		TweenLite.to(title, {
			x: '0',
			y: '-50%',
			duration: 1.6,
			ease: Power3.easeInOut,
			delay: 0.6,
		})
		TweenLite.to(bg, {
			backgroundPosition: '50% 0%',
			opacity: 1,
			duration: 2,
			ease: Power3.easeInOut,
		})
	}
}

export const contactsTransitions = () => {
	gsap.registerPlugin(CSSRulePlugin)
	const infoMap = document.querySelector('.info-map')
	const after = CSSRulePlugin.getRule('#map:after') //get the rule

	if (infoMap && after) {
		// need to reset
		gsap.to(after, {
			duration: 0,
			cssRule: { y: '0%' },
		})

		gsap.to(after, {
			duration: 1.2,
			ease: Power3.easeInOut,
			cssRule: { y: '110%' },
		})

		TweenLite.to(infoMap, {
			x: '0',
			y: '0',
			opacity: 1,
			duration: 1.4,
			delay: 0.4,
			ease: Power3.easeInOut,
		})
	}
}
