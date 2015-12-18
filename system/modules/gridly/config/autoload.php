<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   gridly
 * @author    Hamid Abbaszadeh
 * @license   MIT
 * @copyright 2015 respinar
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Gridly',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Gridly\GridlyDca' => 'system/modules/gridly/classes/GridlyDca.php',
));
