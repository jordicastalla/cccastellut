<?php get_header(); ?>

<div id="wrapper">

	<section class="entrades">

				<nav class="navigation_single">
					<span class="alignleft"><?php next_post_link('&laquo; %link') ?></span>
					<span class="alignright"><?php previous_post_link('%link &raquo;') ?></span>
				</nav>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article>

							<h2>
								<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
							</h2>
							<div id="Comparteix"> </div>

							<div class="meta">
								<p><?php the_time('l, j F Y'); ?>, <?php the_time('G:i'); ?> | Categoria : <?php the_category(', '); ?> <br />
								Tags : <?php the_tags('',', ',''); ?></p>
							</div>

							<div class="entry">
									<?php the_content();?>

									<?php wp_link_pages();?>

									<?php edit_post_link('Edita','<p>','</p>');?>
							</div>


				</article>

						<?php endwhile; ?>

						<?php if ( function_exists(similar_posts) ) { ?>

						<div class="related">
							<h2>Entrades similars</h2>
							<?php similar_posts(); ?>
						</div>

						<?php } ?>

						<div id="comments">
							<?php comments_template(); ?>
						</div>

						<?php endif; ?>

	</section>

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>
