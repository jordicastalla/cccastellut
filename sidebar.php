	<aside>

		<ul>

			<?php wp_list_categories('show_count=1&title_li=<h2>Activitats</h2>'); ?>

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar 1") ) : ?>

			<?php endif; ?>

			<li class='arxiusLateral'><h2><i class="fas fa-file-archive"></i> Arxius</h2>
				<ul>
					<?php wp_get_archives('type=yearly'); ?>
				</ul>
			</li>

			<li class="rss">
				<a href="<?php bloginfo('rss_url'); ?>"><i class="fas fa-rss"></i> RSS</a>
			</li>

		</ul>

	</aside>

	<aside>

		<ul>
			<li id="search_id">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
					<div id="search">
						<input type="text" value=""  placeholder="Cerca" name="s" id="s" class="text" />
					</div>
				</form>
			</li>

			<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar 2") ) : ?>





			<?php  endif; ?>

		</ul>

	</aside>
