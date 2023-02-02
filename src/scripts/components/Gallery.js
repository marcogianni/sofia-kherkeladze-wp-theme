import Flickity from 'flickity'

class Gallery {
	constructor() {
		this.init()
	}

	init() {
		const containerGallery = document.querySelector(
			'.gallery-slider-container'
		)
		const gallery = document.querySelector('.gallery-slider')
		const firstGalleryItems = document.querySelectorAll(
			'.first-gallery__item'
		)
		if (gallery) {
			var flkty = new Flickity(gallery, {
				cellAlign: 'center',
				contain: true,
				pageDots: false,
				wrapAround: false,
			})

			Array.from(firstGalleryItems).map((singleItem) => {
				singleItem.addEventListener('click', function () {
					const selectedNumber = Number(
						singleItem.classList[1].substr(12, 12)
					)
					flkty.select(selectedNumber - 1, false, true)
					containerGallery.classList.remove(
						'gallery-slider-container-invisible'
					)
				})
			})
		}

		// Close
		const closeButton = document.querySelector('.close-gallery-slider')

		if (closeButton) {
			closeButton.addEventListener('click', function () {
				containerGallery.classList.add(
					'gallery-slider-container-invisible'
				)
			})

			document.onkeydown = function (evt) {
				evt = evt || window.event
				if (evt.keyCode == 27) {
					containerGallery.classList.add(
						'gallery-slider-container-invisible'
					)
				}
			}
		}

		// Sketches
		const secondGallery = document.querySelector(
			'.second-gallery .row .slider'
		)
		if (secondGallery) {
			var flkty2 = new Flickity(secondGallery, {
				selectedAttraction: 0.005,
				friction: 0.19,
				autoPlay: 2000,
				wrapAround: true,
				pauseAutoPlayOnHover: false,
				contain: true,
				pageDots: false,
				freeScroll: true,
				prevNextButtons: false,
				cellAlign: 'center',
			})
		}

		// Wine Labels
		const thirdGallery = document.querySelector(
			'.third-gallery .row .slider'
		)
		if (thirdGallery) {
			setTimeout(function () {
				var flkty3 = new Flickity(thirdGallery, {
					selectedAttraction: 0.005,
					friction: 0.19,
					autoPlay: 2000,
					wrapAround: true,
					pauseAutoPlayOnHover: false,
					contain: true,
					pageDots: false,
					freeScroll: true,
					prevNextButtons: false,
					cellAlign: 'center',
				})
			}, 400)
		}
	}

	reinit() {
		this.init()
	}
}

export default Gallery
