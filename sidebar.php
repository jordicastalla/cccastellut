	<aside>

		<ul>

			<?php wp_list_categories('show_count=1&title_li=<h2>Activitats</h2>'); ?>

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar 1") ) : ?>

			<?php wp_list_pages('title_li=<h2>Pàgines</h2>' ); ?>

			<?php wp_list_bookmarks(); ?>

			<li><h2>Arxius</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php endif; ?>

			<li class="rss">
				<a href="<?php bloginfo('rss_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss_feed.png" alt="RSS FEED" title="Subscriute utilitzant RSS" /></a>
			</li>

		</ul>

	</aside>

	<aside>

		<ul>
			<li id="search_id">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
					<div id="search">
						<input type="text" value=""  placeholder="Cerca" name="s" id="s" class="text" />
						<input type="image" id="searchsubmit" src="<?php bloginfo('template_url');?>/images/search_s.png" value="Cerca" alt="Cerca" class="button" />
					</div>
				</form>
			</li>

			<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar 2") ) : ?>





			<?php  endif; ?>

		</ul>

	</aside>
