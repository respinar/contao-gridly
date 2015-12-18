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

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Gridly\GridlyDca', 'loadDataContainerGridly');
