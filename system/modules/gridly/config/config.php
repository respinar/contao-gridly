<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   gridly
 * @author    Hamid Abbaszadeh
 * @license   The MIT License (MIT)
 * @copyright respinar 2015
 */

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Gridly\GridlyDca', 'loadDataContainerGridly');
