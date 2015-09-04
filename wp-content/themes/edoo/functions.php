<?php
function mysetup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mysetup' );

//selecting language flag buttons
function en_flag_links(){
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
	if (site_url() == $current_url) {
		echo site_url() . '/?lang=en';
	} elseif ($current_url == site_url() . '/contact-form'){
		echo site_url() . '/contact-form?lang=en';
	} else {
		echo site_url() . '/responsive/?lang=en';
	}
}
function ja_flag_links(){
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
	if (site_url() == $current_url) {
		echo site_url() . '/?lang=ja';
	} elseif ($current_url == site_url() . '/contact-form'){
		echo site_url() . '/contact-form?lang=ja';
	} else {
		echo site_url() . '/responsive/?lang=ja';
	}
}

//links
if($_GET['lang'] == en){
	$en = 'en';
	$fixed_message = 'Contact us for Responsive Design Service';
	$fixed_button = site_url() . '/contact-form?lang=en';
} else {
	$ja = 'ja';
	$fixed_message = 'Contact us for Responsive Design Service';
	$fixed_button = site_url() . '/contact-form?lang=ja';
}
