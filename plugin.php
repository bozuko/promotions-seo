<?php
/*
Plugin Name: Promotions: SEO by Yoast Integration
Plugin URI: http://bozuko.com
Description: This plugin improves the UI for Wordpress SEO by Yoast
Version: 1.0.0
Author: Bozuko
Author URI: http://bozuko.com
License: Proprietary
*/

add_action('promotions/plugins/load', function()
{
  define('PROMOTIONS_SEO_DIR', dirname(__FILE__));
  define('PROMOTIONS_SEO_URI', plugins_url('/', __FILE__));
  
  Snap_Loader::register( 'PromotionsSEO', PROMOTIONS_SEO_DIR . '/lib' );
  Snap::inst('PromotionsSEO_Plugin');
}, 100);