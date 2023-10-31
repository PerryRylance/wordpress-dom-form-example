# WordPress DOM Form
This repository shows an example of how to use `PerryRylance\WordPressDomForm`` to make an options page.

## Installation
- Clone this repository in `/wp-content/plugins` on your WordPress installation
- Navigate to `/wp-content/plugins/wordpress-dom-form-example` in your terminal
- Run `composer install`
- Navigate to your WordPress installation's plugins page
- Activate the plugin

## Usage
Navigate to Settings -> DOM Form example options. You can fill out the form here. You'll notice that many fields have validation rules, which your browser should flag up if you break them. If you bypass these then you'll see that the server will validate using the same rules, which will fail.

If you fill out the form without anything that will cause validation to fail, you'll see that the state is saved.

Check out `wordpress-dom-form-example.php` in this repository to see how to register your form.

In brief, here are the steps you need to take to use this library in your own projects.

- Run `composer install perry-rylance/wordpress-dom-form`
- Create a class extending `FormPage`*
- Implement the required abstract methods
	- `getTemplateFilename` must return the name of the file in which your form resides. This can be HTML, or PHP. PHP is executed, so this is useful if you need to use things like WordPress' localization functions.
	- `getOptionName` the name of the option in `wp_options` where you wish to store the JSON representation of the form.
- Add a hook for `init` if you haven't already
- Register your form by calling the static method `::register`

<sub>* - Convenience classes such as `OptionsPage` are provided, if you wish to extend `FormPage` directly, you will need implement the abstract `onAdminMenu`. From here you can call `add_submenu_page` or whichever WordPress function you need to use.</sub>

That's all!