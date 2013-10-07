<?php

//---------------------------------------------
// Application configuration
//---------------------------------------------

return array
(
	/**
	 * Base url of your application (without trailing slash).
	 * The framework will try to autodetect the url if the value is left empty.
	 */
	
	'base_url' => '',
	
	/**
	 * Set to true to hide "index.php" from your urls (this requires mod_rewrite).
	 */

	'clean_urls' => false,

	/**
	 * URL or path to your asset directory (without trailing slash).
	 */

	'asset_location' => '/mako/assets',

	/**
	 * Secret used to provide cryptographic signing, and should be set to a unique, unpredictable value.
	 * You should NOT use the secret included with the framework in a production environment!
	 */
	
	'secret'   => 'oib[H7:Jqn2QcMv77>qMpc<gTLFndNLd',

	/**
	 * Set the default timezone used by various PHP date functions.
	 *
	 * @see http://php.net/manual/en/timezones.php
	 */
	
	'timezone' => 'UTC',

	/**
	 * Default character set used internally in the framework.
	 */

	'charset' => 'UTF-8',

	/**
	 * Default language.
	 * 
	 * Default language pack loaded by the i18n class.
	 */

	'default_language' => 'en_US',

	/**
	 * Languages.
	 * 
	 * If the first segment of the route matches the language 
	 * then the corresponding language pack will be loaded.
	 */

	'languages' => array
	(
		//'no' => 'nb_NO',
		//'fr' => 'fr_FR',
	),
	
	/**
	 * Locale settings.
	 *
	 * locales   : Array of locales to try until success. You can also set the value to "NULL" to use the default locale.
	 * lc_numeric: Set to true to set LC_NUMERIC to the locale you specified.
	 */
	
	'locale' => array
	(
		'locales'    => array('en_US.UTF-8', 'en_US.utf8', 'C'),
		'lc_numeric' => false,
	),

	/**
	 * Class aliases used by the autoloader.
	 */

	'aliases' => array
	(
		'URL'    => 'mako\http\routing\URL',
		'Assets' => 'mako\utility\assets\Assets',
	),

	/**
	 * Packages to initialize by default.
	 */

	'packages' => array
	(
		
	),

	/**
	 * Enable the debug toolbar?
	 * Note that response cache using ETags might not work as expected when the debug toolbar is enabled.
	 */

	'debug_toolbar' => false, // It is recommended to set this value to false when you are in production.

	/**
	 * Cache language files?
	 * Setting this value to true can speed up execution by reducing the number of language files to include.
	 */

	'language_cache' => false,

	/**
	 * Compress output?
	 * Setting this to true will reduce bandwidth usage while slightly increasing the CPU usage.
	 */

	'compress_output' => false,

	/**
	 * Enable ETag response cache?
	 * Setting this to true will reduce bandwidth usage while slightly increasing the CPU usage.
	 */

	'response_cache' => false,
	
	/**
	 * Error handler settings.
	 *
	 * log_errors    : Set to true if you want to log errors caught by the Mako errors handler.
	 * display_errors: Set to true to display errors caught by the mako error handlers.
	 * open_with     : Allows you to open the failing code with your preferred text editor.
	 */
	
	'error_handler' => array
	(
		'log_errors'     => true,
		'display_errors' => true, // It is recommended to set this value to false when you are in production.
		'open_with'      => 'sublime',
	),
);

/** -------------------- End of file --------------------**/