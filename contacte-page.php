<?php
/**
 * Template Name: Contacte amb Google Maps
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

				

  

  <div id="Contacte">
	

<?php $id=24; $post = get_page($id); echo $post->post_content;  ?>


			

</div>
	
	
	<div id="Mapa" >

 <?php

if(function_exists('pronamic_google_maps')) {
    pronamic_google_maps(array(
        'width' => 580 ,
        'height' => 300 
    ));
}

?>

	</div>

			
		 
	




<?php get_footer(); ?>
