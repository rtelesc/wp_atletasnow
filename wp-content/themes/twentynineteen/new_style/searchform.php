<?php $search_text = empty($_GET['s']) ? '' : get_search_query(); ?> 
<form method="get" class="search-form" action="<?php echo esc_url( home_url('/')); ?>" role="search">
	<div>
	    <input id="s" name="s" type="search" value="<?php echo esc_attr($search_text);?>" class="search-field" placeholder="<?php esc_attr_e('Search...', 'whistle'); ?>" />
		<input class="dt-sc-button small" name="submit" type="submit" value="<?php esc_attr_e('Search', 'whistle'); ?>" />
	</div>        
</form>