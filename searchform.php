<li class="header-search">
	<form method="get" class="search-form" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" name="s" value="<?php echo get_search_query() ?>" placeholder="<?php _e('Search Form','hamilton-child'); ?>" /> 
			<a class="search-button" onclick="document.getElementById('search-form').submit(); return false;"><div class="fa fw fa-search"></div></a>
	</form>
</li>