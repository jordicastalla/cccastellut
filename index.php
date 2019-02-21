<?php get_header(); ?>


<div id="wrapper">

	<section class="entrades">

		 <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		     $args = array (	'posts_per_page' => '2'
		     ); ?>

		    <!--La pàgina principal s'ordena per l'ordre real d'escriptura de les entrades, i no la data de publicació-->
		   <?php query_posts( array( 'orderby' => 'ID', 'paged' => get_query_var('paged') ) ); ?>


		    <?php $count = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); if($count == 1); ?>



			<article>

					<h2>
						<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
					</h2>

					<div class="meta">
						<p><?php the_time('l, j F Y'); ?>, | Categoria : <?php the_category(', '); ?> <br />
				</p>
					</div>

					<div class="entry">
						<?php the_post_thumbnail('medium');?>
						<?php the_excerpt();?>
						<?php wp_link_pages();?>
						<div class="linksEntry">
				 		<a href="<?php the_permalink();?>" title="<?php the_title();?>">Llegir més </a>
						<?php edit_post_link('Editar');?>
					</div>

					</div>



			</article>

			<?php endwhile; ?>

			<div class="navigation">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { posts_nav_link(); } ?>
			</div>

			<?php endif; ?>
 		 <?php wp_reset_query(); ?>

	</section>

<?php get_sidebar(); ?>



<?php get_footer(); ?>
