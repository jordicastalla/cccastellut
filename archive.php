<?php get_header(); ?>


	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2>
				<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
			</h2>

			<div class="meta">
				<p><?php the_time('l, j F Y'); ?>, <?php the_time('G:i'); ?> | Categoria : <?php the_category(', '); ?> <br />
				Tags : <?php the_tags('',', ',''); ?></p>
			</div>

			<div class="entry">
				<?php the_excerpt();?>
				<?php wp_link_pages();?>
				<?php edit_post_link('Editar','<p>','</p>');?>
			</div>

			<div class="comentari">
				<?php comments_popup_link('No hi ha comentaris', 'Un comentari', '% comentaris', 'comments-link', 'Aquesta pàgina no accepta comentaris'); ?>
			</div>
		</div>

		<?php endwhile; ?>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { posts_nav_link(); } ?>
		</div>

		<?php endif; ?>

	</div>


	<?php get_footer(); ?>
