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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Gridly;

/**
 * Class Gridly for Hook loadDataContainer
 * @author Data
 *
 */
class GridlyDca extends \BackendModule
{
    /**
     * Current object instance
     * @var object
     */
    protected static $instance = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->import('BackendUser', 'User');
        parent::__construct();
    }


    protected function compile()
    {

    }

    /**
     * Return the current object instance (Singleton)
     * @return GridlyDca
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new GridlyDca();
        }

        return self::$instance;
    }

    /**
     * Hook loadDataContainer
     * @param string $strName    dca
     */
    public function loadDataContainerGridly($strName)
    {
        if ($strName == 'tl_layout')
        {
            //add the new css files
            array_push($GLOBALS['TL_DCA']['tl_layout']['fields']['framework']['options'], 'gridly.css');
        }
        if ($strName == 'tl_page')
        {
            //Alias Name anzeigen in Seitenstruktur, just4fun
            $GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'] = array('title','alias');
            $GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '%s <span style="color:#b3b3b3;padding-left:3px">[%s]</span>';
        }
    }

}
