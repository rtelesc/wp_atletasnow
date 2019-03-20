<?php get_header();

	while(have_posts()): the_post();
	  $page_id = $post->ID;

	  if( whistle_is_plugin_active('buddypress/bp-loader.php') && is_buddypress() ):
		$page_id = '';
		$current_component = bp_current_component();

		global $bp;
		if( $current_component === "members" ){
			$page_id = $bp->pages->members->id;
		} elseif( $current_component === "activity"){
			$page_id = $bp->pages->activity->id;
		} elseif( $current_component === "groups" ){
			$page_id = $bp->pages->groups->id;
		} elseif( $current_component === "register" ){
			$page_id = $bp->pages->register->id;
		} elseif( $current_component === "activate" ){
			$page_id = $bp->pages->activate->id;
		}
	  endif;

	  #Getting meta values...
	  $meta_set = get_post_meta($page_id, '_tpl_default_settings', true);
	  if($GLOBALS['force_enable'] == true)
	  	$page_layout = $GLOBALS['page_layout'];
	  else
	  	$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : $GLOBALS['page_layout'];

	  #Breadcrump section...
      if(!is_front_page() and !is_home())
        get_template_part('includes/breadcrumb_section'); ?>

      <div id="main">
      	  <?php if(is_page()) whistle_slider_section($page_id); ?>

          <div class="container">
              <?php if($page_layout == 'with-left-sidebar'): ?>
                  <section class="secondary-sidebar secondary-has-left-sidebar" id="secondary-left"><?php get_sidebar('left'); ?></section>
              <?php elseif($page_layout == 'with-both-sidebar'): ?>
                  <section class="secondary-sidebar secondary-has-both-sidebar" id="secondary-left"><?php get_sidebar('left'); ?></section>
              <?php endif; ?>
    
              <?php if($page_layout != 'content-full-width'): ?>
                    <section id="primary" class="page-with-sidebar page-<?php echo esc_attr($page_layout); ?>">
              <?php else: ?>
                    <section id="primary" class="content-full-width">
              <?php endif; ?>
    
                <article id="post-<?php echo ($page_id); ?>" <?php post_class(); ?>><?php
                    #Page top code...
                    if(whistle_option('integration', 'enable-single-page-top-code') != '') echo whistle_wp_kses(stripslashes(whistle_option('integration', 'single-page-top-code')));
                    the_content();
                    wp_link_pages(array('before' => '<div class="page-link"><strong>'.esc_html__('Pages:', 'whistle').'</strong> ', 'after' => '</div>', 'next_or_number' => 'number'));
                    edit_post_link(esc_html__('Edit', 'whistle'), '<span class="edit-link">', '</span>' );
                    echo '<div class="social-bookmark">';
                        whistle_show_fblike('page'); whistle_show_googleplus('page'); whistle_show_twitter('page'); whistle_show_stumbleupon('page'); whistle_show_linkedin('page'); whistle_show_delicious('page'); whistle_show_pintrest('page'); whistle_show_digg('page');
                    echo '</div>';
					echo '<div class="dt-sc-clear"></div><div class="dt-sc-hr-invisible"></div>';
                    whistle_social_bookmarks('sb-page');
                    if(whistle_option('integration', 'enable-single-page-bottom-code') != '') echo whistle_wp_kses(stripslashes(whistle_option('integration', 'single-page-bottom-code')));
                    if(whistle_option('general', 'disable-page-comment') != true && (isset($meta_set['comment']) == "")) comments_template('', true); ?>
                </article>
              </section>
    
              <?php if($page_layout == 'with-right-sidebar'): ?>
                <section class="secondary-sidebar secondary-has-right-sidebar" id="secondary-right"><?php get_sidebar('right'); ?></section>
              <?php elseif($page_layout == 'with-both-sidebar'): ?>
                <section class="secondary-sidebar secondary-has-both-sidebar" id="secondary-right"><?php get_sidebar('right'); ?></section>
              <?php endif; ?>
          </div>
      </div><?php

    endwhile;

get_footer(); ?>