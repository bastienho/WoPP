<?php
/*
 * Plugin Name: WoPP_Name
 * Plugin URI: https://github.com/bastienho/WoPP
 * Description: WoPP_Description
 * Version: 1.0
 * Author: bastho
 * Author URI: http://ba.stienho.fr/
 * Text Domain: WoPP_locale
 * Domain Path: /languages
 */

$WoPP_ClassName = new WoPP_ClassName();

class WoPP_ClassName{
    function __construct() {
        load_plugin_textdomain('WoPP_locale', false, 'WoPP_dirname/languages');

    }
    // PHP 4 loader
    function WoPP_ClassName(){
        $this->__construct();
    }
    /**
     * Localize main datas
     */
    function localize(){
        __('WoPP_Name', 'WoPP_locale');
        __('WoPP_Description', 'WoPP_locale');
    }
}