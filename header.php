
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
	<link rel="stylesheet" href="<?php bloginfo('url');?>/wp-content/themes/cccastellut/js/btnAmunt.js" type="text/css" media="screen" />


	<link rel="stylesheet" href="<?php bloginfo('url');?>/wp-content/themes/cccastellut/css/style.css" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />




<!--Fonts Google -->
<link href="https://fonts.googleapis.com/css?family=Cormorant:400,700i|Montserrat:400,400i,700" rel="stylesheet">



<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
    // Relocate Jetpack sharing buttons down into the comments form
    jQuery( '#Comparteix' ).html( jQuery( '.sharedaddy' ).detach() );
} );
</script>

</head>
<body>

	<header>

			<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>

			<img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/logoombra2.png" alt="centre cultural castellut" id="logo" />

		<img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/slider/Albada-de-Valor.jpg"  />

	<nav id="menuPrincipal">

					<ul>
						<li class="<?php if (is_home()) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php bloginfo('url'); ?>" title="Home">Inici</a></li>

						<?php
			$args = array(
				'depth'        => 0,
				'title_li'     => (''),
				'exclude' => '132,139,152'

			);
			wp_list_pages( $args );
			?>



					</ul>
	</nav>


	</header>

<div id="contenidorWeb">

	 <button onclick="topFunction()" id="btnAmunt" title="Ves amunt">Amunt</button>

	<div id="wrapper">
