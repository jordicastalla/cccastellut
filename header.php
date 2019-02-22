
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

	<link rel="stylesheet" href="<?php bloginfo('url');?>/wp-content/themes/cccastellut/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('url');?>/wp-content/themes/cccastellut/css/style.css" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

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

	<svg style="display:none;">
			<symbol id="Maigmo" width="100%" height="100%" viewBox="0 0 9600 100" style="fill:#99042e;stroke:none" >
				<path
			d="m 0,518 1,-83 93,-57 c 51,-32 129,-73 173,-91 44,-19 125,-61 180,-94 55,-33 115,-65 134,-71 37,-12 513,-10 564,2 17,4 60,17 98,29 67,21 68,21 165,2 53,-10 141,-31 196,-47 87,-26 107,-29 180,-23 96,8 211,-14 266,-50 51,-34 150,-44 187,-19 16,11 39,21 53,24 14,3 29,15 35,27 5,13 22,27 37,32 16,6 31,17 34,26 9,21 41,19 54,-5 8,-15 17,-18 43,-13 17,3 40,10 50,15 12,6 35,2 75,-13 88,-33 191,-29 316,12 l 100,32 92,-18 c 76,-15 109,-16 191,-9 152,14 442,9 598,-10 77,-9 238,-33 358,-52 325,-53 394,-46 580,60 126,72 125,72 267,31 150,-43 199,-69 207,-108 l 6,-29 69,7 c 38,4 101,16 141,27 39,10 142,34 227,53 187,41 510,121 565,140 39,13 153,34 540,96 227,36 439,48 845,49 565,0 897,-30 1225,-110 116,-28 258,-67 317,-85 85,-28 131,-36 223,-41 l 115,-7 V 373 600 H 4800 0 Z" />
			</symbol>
	</svg>

<div id="contenidorWeb">

	<header>

		  <h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
		  <h2><?php bloginfo('description'); ?></h2>
		  <img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/logoombra2.png" alt="centre cultural castellut" id="logo" />

			<?php echo do_shortcode('[metaslider id="2900"]'); ?>

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

	<div id="wrapper">
