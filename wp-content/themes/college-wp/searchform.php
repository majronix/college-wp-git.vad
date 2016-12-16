<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<!-- <label class="screen-reader-text" for="s">Поиск: </label> -->
	<input class="header_search__field field_effect" type="text" placeholder="Пошук..." value="<?php echo get_search_query() ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" class="header_search__but" value="" />
</form>								