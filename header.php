<!DOCTYPE html>
<html lang="ca">
<head>

	<title> <?php bloginfo('name'); ?><?php wp_title(); ?> </title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<meta name="description" content="Centre Cultural Castellut" />
	<meta name="keywords" content="castalla, valencià, enric valor, finestreta,senderisme, trobades, setmana verda,fira del llibre, simposi, centenari, calendaris, concerts,literari, fotografia, foia de castalla, genovés, pilota, valencians, valencianes, català, catalans, països catalans, independència, weblog, informació, actualitat,  catalana, catalunya, valencia, balears, nord, franja, ponent, andorra, alguer" />
	<meta name="language" content="Catalan" />
	<meta property="og:image" content="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/logo.jpg" />
	<base href="http://www.centreculturalcastellut.cat/" />
	<link rel="stylesheet" href="<?php bloginfo('url');?>/wp-content/themes/cccastellut/css/style.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--Fonts Google -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant:400,700i|Montserrat:400,400i,700" rel="stylesheet">
</head>

<body>

	<header>



				<span class="dataCatala"> <?php setlocale(LC_ALL,"ca_ES"); echo strftime("%A, %d de %B de %Y"); ?> </span>


			<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>

			<img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/logoombra2.png" alt="centre cultural castellut" id="logo" />

			<div class="slider-ccc">
		    <div><img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/slider/Albada-de-Valor.jpg"  /></div>
		    <div><img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/slider/Fira-Fantasia.jpg"  /></div>
		    <div><img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/slider/Senderisme.jpg"  /></div>
  		</div>

				<nav id="menuPrincipal">
						<?php
						wp_nav_menu( array(
						    'menu' => 'menuPrincipal'
						) );
						 ?>
				</nav>

	</header>

<div id="contenidorWeb">

	 <button onclick="topFunction()" id="btnAmunt" title="Ves amunt">Pujar</button>

	<div id="wrapper">
