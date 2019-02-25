<?php
/**
 * Template Name: Estàtic, novetats i històric
 *
 *
 */

get_header(); ?>




	    <section id="Arxiu">


				 <h2>l'Històric del Centre</h2>
				 <span class='historicCat'>sobre <?php the_title(); ?> </span>

				<ul>
						<?php smart_archives( '', 'category_name='.esc_html( get_the_title() ) ); ?>

				<h2> <?php get_the_title() ?> </h2>
				</ul>



			</section>



	    <section id="Estatic">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		    <h2><?php the_title(); ?></h2>
			    <?php the_content(); ?>
		    <?php endwhile; else: endif; ?>

	    </section>



	 <section id="Actualitat">

		    <h2>Actualitat</h2>


		    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		     $args = array (	'posts_per_page' => '8'
		     ); ?>

		   <?php query_posts( array( 'category_name' => get_the_title(), 'paged' => get_query_var('paged') ) ); ?>


		    <?php $count = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); if($count == 1); ?>

		   <!--Per a que isca el "Continuar llegint"-->
		   <?php global $more; $more = 0; ?>


		    <article id="Entrada">

					  <span class='data'><?php the_time('j F Y') ?></span>

					  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					  <?php the_content('Continuar llegint') ?>

					   <?php wp_link_pages();?>

					   <?php edit_post_link('Editar','<p>','</p>');?>


		    </div>

		     <div class="comentari">

				<?php comments_popup_link('No hi ha comentaris', 'Un coment', '% comentaris', 'comments-link', 'Aquesta pàgina no accepta comentaris'); ?>
		     </div>


		      <?php endwhile; ?>



		     <div class="navigation">

			<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?><?php } ?>

		     </div>


		<?php endif; ?>
	   <?php wp_reset_query(); ?>

	</div>





<?php get_footer(); ?>
