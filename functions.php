<?php

// Requires
// ***********************************************************

// PHP-Util (singole funzioni utili utilizzabili per lo sviluppo)
require get_template_directory() . '/php-util/variables.php';
require get_template_directory() . '/php-util/logJs.php';
require get_template_directory() . '/php-util/partial.php';
require get_template_directory() . '/php-util/icon.php';
require get_template_directory() . '/php-util/picture.php';
require get_template_directory() . '/php-util/components.php';
require get_template_directory() . '/php-util/menus.php';

// Plugins (plugin custom del tema)
require get_template_directory() . '/plugins/tgm.php';
require get_template_directory() . '/plugins/wideo-mailer/mailer.php';

// Backend (configurazione wordpress)
// -> Update wordpress admin panel and options
require get_template_directory() . '/backend/backend.php';
// -> Update wordpress front-end management
require get_template_directory() . '/backend/front.php';
// -> Update wordpress users and capabilities
require get_template_directory() . '/backend/users.php';
// -> Update wordpress menus
require get_template_directory() . '/backend/menus.php';
// -> Update wordpress custom post types
require get_template_directory() . '/backend/custom-posts.php';
// -> Set TGM required plugins
require get_template_directory() . '/backend/tgm.php';
// -> Import ACF
require get_template_directory() . '/backend/ACF.php';

// Initialize Wideo Mailer options
// ***********************************************************

function wideo_mailer_initialize() {
	return [
		'contacts' => [
			'debug' => false,
			'params' => ['name', 'email', 'subject', 'message'],
			'params_required' => ['name', 'email', 'subject', 'message'],
			'mail_to' => 'info@sofiart.info',
			'mail_subject' => 'Hello!',
		],
	];
}

//Menu
function register_my_menus() {
	register_nav_menus([
		'menu-sf' => __('Menu-SF'),
	]);
}
add_action('init', 'register_my_menus');
