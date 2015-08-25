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
	} else {
		echo site_url() . '/responsivedesignservice/?lang=en';
	}
}
function ja_flag_links(){
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
	if (site_url() == $current_url) {
		echo site_url() . '/?lang=ja';
	} else {
		echo site_url() . '/responsivedesignservice/?lang=ja';
	}
}

//links
if($_GET['lang'] == en) $en = 'en';

//third frame en
//if($_GET['lang'] == en) $en = 'third-en';
?>
