<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name = "format-detection" content = "telephone=no">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/responsivepage.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/common.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/index.css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,800,900,300,100,200' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
  $ua=$_SERVER['HTTP_USER_AGENT'];
  $browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'iPad')!==false)||(strpos($ua,'Android')!==false));
	if ($browser == true){
	$browser = 'sp';
  }
?>
<?php if($browser == 'sp'){ ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/sp.css"/>
<?php } ?>

<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
</head>

<body id="<?php if(is_front_page()): ?>index<?php else: ?>lower<?php endif; ?>" onload="initialize();">
<header>
	<h1><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" /></a></h1>
	<div class="<?php echo ($_GET['lang'] == en) ? 'select' : 'jap'; ?>">
		<span class="<?php echo ($_GET['lang'] == en) ? 'selectlang' : 'selectjap'; ?>"><a href="#">Select your language:</a></span>
		<a href="<?php en_flag_links(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/gb.png" /></a>
		<a href="<?php ja_flag_links(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/jp.png" /></a>
	</div>
	<div id="toggle"><a href="#"><i class="fa fa-bars"></i></a></div>
	<nav class="<?php if($_GET['lang'] !== en) echo 'japlinks'; ?>">
		<ul>
			<li><a href="#mainvisual">Top</a></li>
			<li><a href="<?php echo site_url() . '#about'; ?>"><?php echo get_the_title( 2 ); ?></a></li>
			<li><a href="<?php echo site_url() . '#vision'; ?>"><?php echo get_the_title( 6 ); ?></a></li>
			<li><a href="<?php echo site_url() . '#learning'; ?>"><?php echo get_the_title( 8 ); ?></a></li>
			<li><a href="<?php echo site_url() . '#service'; ?>"><?php echo get_the_title( 10 ); ?></a></li>
			<li><a href="<?php echo site_url() . '#team'; ?>"><?php echo get_the_title( 17 ); ?></a></li>
			<li><a href="<?php echo site_url() . '#contact'; ?>"><?php echo get_the_title( 12 ); ?></a></li>
		</ul>
	</nav>
</header>
<div id="main">
