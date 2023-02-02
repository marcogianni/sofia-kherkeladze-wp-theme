class MobileMenu {
	constructor() {
		this.init()
	}

	init() {
		const container = document.querySelector('.mobile-menu-container')
		const close = document.querySelector('.mobile-menu-container__close')
		const open = document.querySelector('.mobile-header__menu')

		if (open) {
			open.addEventListener('click', function () {
				console.log('clickedd')
				container.classList.add('mobile-menu-container__open')
			})

			close.addEventListener('click', function () {
				container.classList.remove('mobile-menu-container__open')
			})
		}
	}

	reinit() {
		this.init()
	}
}

export default MobileMenu
