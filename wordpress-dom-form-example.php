<?php
/*
 * Plugin Name:       WordPress - DOM Form example
 * Plugin URI:        https://github.com/PerryRylance/wordpress-dom-form-example
 * Description:       Example of using the PerryRylance\DOMForm library in WordPress
 * Version:           1.0.0
 * Requires at least: 6.3
 * Requires PHP:      8.1
 * Author:            Perry Rylance
 * Author URI:        https://perryrylance.com/
 * License:           MIT
 */

use PerryRylance\WordPressDomForm\OptionsPage;

require_once __DIR__ . '/vendor/autoload.php';

class ExampleForm extends OptionsPage
{
	protected function getTemplateFilename(): string
	{
		return __DIR__ . '/vendor/perry-rylance/dom-form/tests/sample.html';
	}

	protected function getOptionName(): string
	{
		return 'perry-rylance-wordpress-dom-form-example-settings';
	}
}

add_action('init', function() {

	ExampleForm::register(
		"WordPress - DOM Form example options",
		"DOM Form example options",
		"manage_options",
		"dom-form-example-options"
	);

});
