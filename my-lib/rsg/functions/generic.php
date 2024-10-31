<?php
/****************************************************************/
/****************************************************************/
/* LOUGOUT NONCE */
function rsg_wp_logout_nonce(){
    check_ajax_referer( 'ajax-logout-nonce', 'nonce' ); wp_logout(); ob_clean();
    update_user_meta(get_current_user_id(),'rsg_online_status','offline');
    echo json_encode($s); wp_die();
}

/* RETURN FILE CONTENTS */
function rsg_check_file_path($path,$file_name,$slug){
	$contents = get_template_directory().$path.$file_name;
    return ( file_exists($contents) == true ) ? get_template_part($path.'rsg',$slug) : 'missing';
}

/* GENERATE RANDOM STRING */
function rsg_generate_random_string($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_#*';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, $charactersLength - 1)]; }
    return $randomString;
}

/* RETURN CURRENT URL */
function rsg_return_current_url(){
	$current_url 	= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'];
	$current_url 	= $current_url.$_SERVER['REQUEST_URI'];
	return esc_url($current_url);
}

function rsg_get_menu($theme_location = '', $menu = '', $menuClass = ''){
    $defaults = array(
        'theme_location'  => $theme_location, 'menu' => $menu, 'container' => false, 'container_class' => '',
        'container_id' => '', 'menu_class' => $menuClass, 'menu_id' => '', 'echo' => true, 'before' => '', 'after' => '',
        'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>', 'depth' => 3,
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',  'walker' => new wp_bootstrap_navwalker(),
        );
    return wp_nav_menu( $defaults );
}

/****************************************************************/
/****************************************************************/
function rsg_wp_login(){
    $r = $_REQUEST;

    if( $r['do'] == 'login' ){
        $ch = check_ajax_referer( 'ajax-login-nonce', 'login_nonce' );
        if( ($ch == false) ){
            $s['stat'] = 'error_session';
        }else{
            $s['redirect']  = esc_url_raw($r['pageURL']);
            $nameORemail    = sanitize_text_field( $r['nameORemail'] );
            $password       = sanitize_text_field( $r['password'] );
            $user           = wp_authenticate($nameORemail, $password);
            $rememberMe     = ($r['rememberMe']=='true')? true : false;
            if( is_wp_error($user) ){
                $s['stat'] = 'error';
            }else{
                $date_now = new DateTime();
                wp_signon( array( 'user_login' => $nameORemail, 'user_password' => $password, 'remember' => $rememberMe ), true );
                wp_set_current_user( $user->ID, $user->user_login );
                wp_set_auth_cookie( $user->ID );
                update_user_meta($user->ID,'rsg_online_status',$date_now);
                do_action( 'wp_login', $user->user_login, $user );
                $s['stat'] = 'success';
            }
        }
    }elseif($r['do'] == 'modal'){
        $s['modal'] = rsg_login_modal();
    }
    echo json_encode($s); wp_die();
}

function rsg_login_modal(){
    ob_start();
    $choice = get_option('rsgcld_login_modal_template');
    if($choice == 'template-blue'){
        $contents = rsg_check_file_path('/rsg/templates/','rsg-login-blue.php','login-blue');
        if( $contents != 'missing' ){ echo $contents; }else{ include(CLD_TEMPLATES.'rsg-login-blue.php'); }
    }else{
        $contents = rsg_check_file_path('/rsg/templates/','rsg-login.php','login');
        if( $contents != 'missing' ){ echo $contents; }else{ include(CLD_TEMPLATES.'rsg-login.php'); }
    }
    return ob_get_clean();
}
function rsg_wp_popupmenu(){
    echo json_encode(rsg_popup_menu()); wp_die();
}

function rsg_popup_menu(){
    ob_start();
    $contents = rsg_check_file_path('/rsg/templates/','rsg-popup_menu.php','popup_menu');
    if( $contents != 'missing' ){ echo $contents; }else{ include(CLD_TEMPLATES.'rsg-popup_menu.php'); } return ob_get_clean();
}

function rsg_max_chars($x, $l){
  if(strlen($x)<=$l) { return $x; }
  else { $y=substr($x,0,$l) . '...'; return $y; }
}

/* NAVWAKLER MENU */			
require('wp_bootstrap_navwalker.php');