<?php
/*
Plugin Name: RSG Compiled Libraries
Plugin URI: https://wordpress.org/plugins/
Description: Lightweight plugin that includes different libraries according to your needs. Lity, Font Awesome, Bootstrap , Slick, Tablesorter, RSG, Libraries, Stylesheet Perks, CSS, Login Function, Back to Top, Popup Menu, All for one, One for all, String Generator, Preloader, Button Designs
Version: 0.0.1
Author: Ryner S. Galaus
Author URI: https://profiles.wordpress.org/rynergalaus
Tags: Lightweight plugin, Lity, Font Awesome, Bootstrap , Slick, Tablesorter, RSG, Libraries, Stylesheet Perks, CSS, Login, Logout, Back to Top, Popup Menu, All for one, One for all, Ryner, String Generator, Preloader, Button Designs
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Copyright: Ryner S. Galaus
Text Domain: rsgcld
Domain Path: /lang
*/


if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists('RSGCLD') ) :

class RSGCLD{

	function __construct() { /* Do nothing here */ }

    function rsgcld_initialize(){
    	if(!defined('CLD_LINK')){
			define('CLD_LINK',plugin_dir_url(__FILE__));
			define('CLD_LIB',CLD_LINK.'/my-lib/');
			define('CLD_TEMPLATES',plugin_dir_path(__FILE__).'/templates/');
		}

		if (!defined('RSGCLD_VERSION')){ define('RSGCLD_VERSION', '0.0.1'); }

		register_activation_hook(__FILE__, 'rsgcld_plugin_activation');
		add_action( 'plugins_loaded',  'RSGCLD_VERSION_check') ;
		register_deactivation_hook(__FILE__, 'rsgcld_plugin_deactivation');
        
        add_action( 'admin_enqueue_scripts', array($this,'initialize_script_styles') );
        add_action( 'wp_enqueue_scripts', array($this,'initialize_script_styles') );
        add_action( 'admin_enqueue_scripts', array($this,'admin_only_enqueue') );
        add_action( 'after_setup_theme',array($this,'rsg_after'));
        
        if ( empty ( $GLOBALS['admin_page_hooks']['rsg_addons_page'] ) ){ add_action( 'admin_menu',array($this,'rsg_add_page') ); }
        add_action( 'admin_menu',array($this,'CLD_page') );

        if( ( get_option('rsgcld_login_modal_template'==null) ) || ( get_option('rsgcld_login_modal_template')=='') ){
        	update_option('rsgcld_login_modal_template', 'default');
        }
        
    }


	/**
	 ****************************************************************
	 * MAIN PAGE = Title|Menu Title|Capability|Slug|Function|Icon - Position
	 * @since   0.0.1
	 ****************************************************************/

	function rsg_add_page(){add_menu_page(__('RSG Addons'), __('RSG Addons'), 'manage_options', 'rsg_addons_page', 'rsg_addons_page_callback', 'dashicons-editor-code', 2);}
	function CLD_page(){add_submenu_page( 'rsg_addons_page', __('Libraries'), __('Libraries'), 'manage_options', 'rsgcld', 'rsgcld_callback' );}

    
    /**
	****************************************************************
	* SCRIPTS AND STYLES
	* @since   0.0.2
	****************************************************************/
    function initialize_script_styles(){

    	/***** LITY | VERSION 2.3.1 *****/	

    	if( get_option('rsgcld_lity')=='yes' ){
    		wp_register_style( 'lity', CLD_LIB.'lity_2.3.1/lity.min.css', null, '2.3.1', 'screen' );
		    wp_enqueue_style( 'lity' );
			wp_register_script( 'lity_js', CLD_LIB.'lity_2.3.1/lity.min.js', array( 'jquery' ), '2.3.1', true );
	   		wp_enqueue_script( 'lity_js' );
    	}

    	/***** FONT AWESOME | VERSION 5.6.3 *****/	

	    wp_register_style( 'font_awesome', CLD_LIB.'font-awesome/css/all.css' );
	    wp_enqueue_style( 'font_awesome' );

		/***** BOOTSTRAP | VERSION 4.3.1 *****/	

		if( get_option('rsgcld_bs')=='yes' ){
    		wp_register_script( 'bs_js_4.3.1', CLD_LIB.'bootstrap_4.3.1/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
   			wp_enqueue_script( 'bs_js_4.3.1' );
			wp_register_style( 'bs_css_4.3.1', CLD_LIB.'bootstrap_4.3.1/bootstrap.min.css', null, '4.3.1', 'screen' );
			wp_enqueue_style( 'bs_css_4.3.1' );
		}

		/***** SLICK | VERSION 1.8.1 *****/	

		if( get_option('rsgcld_slick')=='yes' ){
    		wp_register_style( 'slick-css', CLD_LIB.'slick_1.8.0/slick.css', null, '1.8.1', 'screen' );
		    wp_enqueue_style( 'slick-css' );
			wp_register_script( 'slick-js', CLD_LIB.'slick_1.8.0/slick.min.js', array( 'jquery' ), '1.8.1', true );
	   		wp_enqueue_script( 'slick-js' );
	   	}

		/***** TABLESORTER | VERSION 2.31.1 *****/

    	if( get_option('rsgcld_tbls')=='yes' ){
    		wp_register_style( 'rsg_tbls_css', CLD_LIB.'tablesorter_2.31.1/theme.default.css' );
		    wp_enqueue_style( 'rsg_tbls_css' );
			wp_register_script( 'rsg_tbls_js', CLD_LIB.'tablesorter_2.31.1/jquery.tablesorter.js', array( 'jquery' ), '2.31.1', true );
	    	wp_enqueue_script( 'rsg_tbls_js' );
			wp_register_script( 'rsg_tbls_jsw', CLD_LIB.'tablesorter_2.31.1/jquery.tablesorter.widgets.js', array( 'jquery' ), '2.31.1', true );
	    	wp_enqueue_script( 'rsg_tbls_jsw' );
	    }

		/***** RSG | VERSION 0.0.3 *****/

		wp_register_style( 'rsg_css', CLD_LIB.'rsg/rsg.min.css',null,'0.0.3','screen' );
    	wp_enqueue_style( 'rsg_css' );
	    
	    wp_register_script( 'rsg_js', CLD_LIB.'rsg/rsg.min.js', array( 'jquery' ), '0.0.1', true );
	    wp_enqueue_script( 'rsg_js' );
	    wp_localize_script( 'rsg_js', 'rsg_ajax', array( 
    		'ajaxurl' 		=> admin_url( 'admin-ajax.php' ),
    		'home_url' 		=> get_home_url(),
    		'logout_nonce' 	=> wp_create_nonce('ajax-logout-nonce'),
    		'login_nonce' 	=> wp_create_nonce('ajax-login-nonce'),
    		'rsg_backtotop' => get_option('rsg_backtotop')=='yes'?'add':'remove',
    	));

	}

	function admin_only_enqueue(){
		$rsgcld = get_home_url().'/wp-admin/admin.php?page=rsgcld';
		wp_register_script( 'rsgcld', CLD_LIB.'rsgcld.min.js', array( 'jquery' ), 1.0, true );
	    wp_enqueue_script( 'rsgcld' );
	    wp_localize_script( 'rsgcld', 'rsgcld', 
	    	array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'home_url' => get_home_url(),'rsgcld_admin'=>$rsgcld ));
	}

	function rsg_after(){
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag');
		register_nav_menus( array( 'main-menu' => __( 'Main Menu' ) ));
		add_action('wp_ajax_nopriv_rsg_wp_login','rsg_wp_login');
		add_action('wp_ajax_rsg_wp_login','rsg_wp_login');
		add_action('wp_ajax_nopriv_rsg_wp_logout_nonce','rsg_wp_logout_nonce');
		add_action('wp_ajax_rsg_wp_logout_nonce','rsg_wp_logout_nonce');
		add_action('wp_ajax_rsg_wp_popupmenu','rsg_wp_popupmenu');
		add_action('wp_ajax_nopriv_rsg_wp_popupmenu','rsg_wp_popupmenu');
	}

}
/**
 ****************************************************************
 * VERSION CONTROL
 * @since   0.0.2
 ****************************************************************/
function rsgcld_plugin_activation() { return update_option('RSGCLD_VERSION', RSGCLD_VERSION); }
function RSGCLD_VERSION_check(){ if (RSGCLD_VERSION !== get_option('RSGCLD_VERSION')){ rsgcld_plugin_activation(); } }
function rsgcld_plugin_deactivation() {
	delete_option('RSGCLD_VERSION');
	delete_option('rsgcld_lity');
	delete_option('rsgcld_bs');
	delete_option('rsgcld_slick');
	delete_option('rsgcld_tbls');
	delete_option('rsg_backtotop');
	delete_option('rsg_prelaoder');
}

 /**
 ****************************************************************
 * DEFINE PLUGIN LINKS
 * @since   0.0.2
 ****************************************************************/

if(!defined('CLD_LINK')){
	define('CLD_LINK',plugin_dir_url(__FILE__));
	define('CLD_LIB',CLD_LINK.'my-lib/');
	define('CLD_FUN',CLD_LINK.'functions/');
	define('CLD_TEMPLATES',plugin_dir_path(__FILE__).'/templates/');
}


/**
 ****************************************************************
 * FUNCTIONS
 * @since   0.0.2
 ****************************************************************/
include_once('my-lib/rsg/functions/generic.php');
if( is_admin() ){ include_once('my-lib/rsg/functions/callback.php');}



 /**
 ****************************************************************
 * START PLUGIN
 * @since   0.0.1
 ****************************************************************/

function rsgcld_start(){
    $rsgcld = new RSGCLD();
    $rsgcld->rsgcld_initialize();
    return $rsgcld;
}
rsgcld_start();
endif;

if( !function_exists('rsg_addons_page_callback') ){ function rsg_addons_page_callback(){} }