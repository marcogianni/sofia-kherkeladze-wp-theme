import { postAjax } from '../util'

class Contact {
	constructor() {
		this.init()
	}
	// document.getElementById("p1").innerHTML = "New text!";
	init() {
		const form = document.querySelector('[data-form]')
		const buttonTitle = document.querySelector(
			'[data-form] .black-button__title'
		)

		if (form) {
			const inputs = form.querySelectorAll(
				'input:not([type="checkbox"]), textarea'
			)

			form.addEventListener('submit', function (e) {
				e.preventDefault()
				const data = {}
				inputs.forEach((single) => {
					data[single.name] = single.value
				})

				postAjax(
					`${templateUrl}/plugins/wideo-mailer/api.php`,
					data,
					(res) => {
						console.log('postAjax.response', res)
						try {
							const jsonRes = JSON.parse(res)
							if (jsonRes.result) {
								console.log('postAjax.success', jsonRes)
								console.log('buttontitle', buttonTitle)
								form.classList.toggle('form-success')
								buttonTitle.innerHTML = 'Sent'
								setTimeout(function () {
									form.classList.remove('form-success')
									buttonTitle.innerHTML = 'Send Message'
								}, 2500)
							} else {
								console.log('postAjax.fail', jsonRes)
								form.classList.toggle('form-fail')
								buttonTitle.innerHTML = 'Sending Failed'
								setTimeout(function () {
									form.classList.remove('form-fail')
									buttonTitle.innerHTML = 'Send Message'
								}, 2500)
							}
						} catch (error) {
							console.log('ServerError', error)
						}
					}
				)
			})
		}
	}

	reinit() {
		this.init()
	}
}

export default Contact
