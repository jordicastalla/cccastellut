<?php get_header(); ?>



<section id="Arxiu">



	 <h2>l'Històric del Centre</h2>
	 <span class='historicCat'>sobre <?php the_category(', ') ?> </span>

<?php
//Per a pillar el ID de la categoria actual
	 function getCurrentCatID(){
	global $wp_query;
	if(is_category() || is_single()){
		$cat_ID = get_query_var('cat');
	}
	return $cat_ID;
}
?>

	 <ul>
 			<?php smart_archives( '', 'cat='.getCurrentCatID()); ?>

 	<h2> <?php get_the_title() ?> </h2>
 	</ul>



</section>



	<section class="entrades">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="post">
										<h2>
											<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
										</h2>

										<div class="meta">
											<p><?php the_time('l, j F Y'); ?>, <?php the_time('G:i'); ?> | Categoria : <?php the_category(', '); ?> <br />
											Tags : <?php the_tags('',', ',''); ?></p>
										</div>

										<div class="entry">
											<?php the_post_thumbnail('medium');?>
											<?php the_excerpt();?>
											<?php wp_link_pages();?>
											<?php edit_post_link('Editar','<p>','</p>');?>
										</div>

										<div class="comentari">
											<?php comments_popup_link('No hi ha comentaris', 'Un comentari', '% comentaris', 'comments-link', 'Aquesta pàgina no accepta comentaris'); ?>
										</div>

							</article>

							<?php endwhile; ?>

							<nav class="navigation">
								<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { posts_nav_link(); } ?>
							</nav>

							<?php endif; ?>

	</section>



	<?php get_footer(); ?>
