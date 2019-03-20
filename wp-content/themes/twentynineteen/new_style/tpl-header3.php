<?php
/*
	Template Name: Header Type-3
*/
	get_header('type3');

	while(have_posts()): the_post();

	  $page_id = ($post->ID == 0) ? get_queried_object_id() : $post->ID;
	  if(is_page()) whistle_slider_section($page_id);

	  #Getting meta values...
	  $meta_set = get_post_meta($page_id, '_tpl_default_settings', true);

	  #Breadcrump section...
      if(!is_front_page() and !is_home())
        get_template_part('includes/breadcrumb_section'); ?>

      <div id="main">
      	  <?php if(is_page()) whistle_slider_section($page_id); ?>

          <section id="primary" class="content-full-width">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
                  #Page top code...
                  if(whistle_option('integration', 'enable-single-page-top-code') != '') echo whistle_wp_kses(stripslashes(whistle_option('integration', 'single-page-top-code')));
                  the_content();
                  wp_link_pages(array('before' => '<div class="page-link"><strong>'.esc_html__('Pages:', 'whistle').'</strong> ', 'after' => '</div>', 'next_or_number' => 'number')); ?>
    
                  <div style="background-repeat:no-repeat;background-position:left top;" class="fullwidth-section">
                      <div class="container"><?php
                          edit_post_link(esc_html__('Edit', 'whistle'), '<span class="edit-link">', '</span>' );
                          echo '<div class="social-bookmark">';
                              whistle_show_fblike('page'); whistle_show_googleplus('page'); whistle_show_twitter('page'); whistle_show_stumbleupon('page');
                              whistle_show_linkedin('page'); whistle_show_delicious('page'); whistle_show_pintrest('page'); whistle_show_digg('page');
                          echo '</div>';
						  echo '<div class="dt-sc-clear"></div><div class="dt-sc-hr-invisible"></div>';
                          whistle_social_bookmarks('sb-page');
                          if(whistle_option('integration', 'enable-single-page-bottom-code') != '') echo whistle_wp_kses(stripslashes(whistle_option('integration', 'single-page-bottom-code')));
                          if(whistle_option('general', 'disable-page-comment') != true && (isset($meta_set['comment']) == "")) comments_template('', true); ?>
                      </div>
                  </div>
              </article>
          </section>
      </div><?php

    endwhile;

get_footer(); ?>