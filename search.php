<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">
			<h2>
				<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a>
			</h2>

			<div class="meta">
				<p><?php the_time('F j, Y'); ?> - <?php the_time('G:i'); ?> | Tags : <?php the_tags('',', ',''); ?></p>
			</div>

			<div class="entry">
				<?php the_excerpt();?>
				<?php wp_link_pages();?>
				<?php edit_post_link('Editar','<p>','</p>');?>
			</div>



		<?php endwhile; ?>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { posts_nav_link(); } ?>
		</div>
<?php
		else :

			  echo wpautop( '<h1>No hem trobat res que coincidisca amb eixa cerca<h1>' );?>
	<?php wp_list_categories('show_count=1&title_li=<h3>Però pots buscar a les nostres categories:</h3>'); ?>

		<?php endif; ?>

	</div> <!--sfarsit de content-->



	<?php get_footer(); ?>
