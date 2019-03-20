<?php get_header();

	while(have_posts()): the_post();

	  #Getting meta values...
	  $meta_set = get_post_meta($post->ID, '_dt_post_settings', true);
	  if($GLOBALS['force_enable'] == true)
	  	$page_layout = $GLOBALS['page_layout'];
	  else
	  	$page_layout = !empty($meta_set['layout']) ? $meta_set['layout'] : $GLOBALS['page_layout'];

	  $feature_image = "blog-onecol";

	  #Better image size...
	  switch($page_layout) {
		  case "with-left-sidebar":
			  $feature_image = $feature_image."-sidebar";
			  break;
		  
		  case "with-right-sidebar":
			  $feature_image = $feature_image."-sidebar";
			  break;
  
		  case "with-both-sidebar":
			  $feature_image = $feature_image."-bothsidebar";
			  break;
	  }

	  #Breadcrump section...
      get_template_part('includes/breadcrumb_section'); ?>

      <div id="main">
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
              <?php endif;
                    #Getting posts format...
                    $format = get_post_format();
                    $format = !empty($format) ? $format : 'standard';
                    $pholder = whistle_option('general', 'enable-placeholder-images'); ?>
    
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry blog-single-entry'); ?>>
                    <div class="blog-entry-inner">
                        <div class="entry-thumb"><?php
                            #Switching the format...
                            switch($format):
                                case "image":
                                  if( has_post_thumbnail() && isset($meta_set['disable-featured-image']) == "" ): ?>
                                      <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php
                                          $attr = array('title' => get_the_title()); the_post_thumbnail($feature_image, $attr); ?>
                                      </a><?php
                                  elseif($pholder == "true" && isset($meta_set['disable-featured-image']) == ""): ?>
                                      <a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
                                          <img src="http<?php whistle_ssl(true);?>://placehold.it/1168x600&text=<?php the_title(); ?>" width="1168" height="600" alt="<?php the_title(); ?>" />
                                      </a><?php
                                  endif;
                                break;
    
                                case "gallery":
                                  $post_meta = get_post_meta(get_the_id() ,'_dt_post_settings', true);
                                  $post_meta = is_array($post_meta) ? $post_meta : array();
                                  if( array_key_exists("items", $post_meta) ):
                                      echo "<ul class='entry-gallery-post-slider'>";
                                      foreach ( $post_meta['items'] as $item ) { echo "<li><img src='{$item}' alt='gal-img' /></li>";	}
                                      echo "</ul>";
                                  endif;
                                break;
    
                                case "video":
                                  $post_meta =  get_post_meta(get_the_id() ,'_dt_post_settings', true);
                                  $post_meta = is_array($post_meta) ? $post_meta : array();
                                  if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ):
                                      if( array_key_exists('oembed-url', $post_meta) && ! isset( $_COOKIE['dtPrivacyVideoEmbedsDisabled'] ) ):
                                          echo "<div class='dt-video-wrap'>".wp_oembed_get($post_meta['oembed-url']).'</div>';
                                      elseif( array_key_exists('self-hosted-url', $post_meta) ):
                                          echo "<div class='dt-video-wrap'>".wp_video_shortcode( array('src' => $post_meta['self-hosted-url']) ).'</div>';
                                      endif;
                                  endif;
                                break;
    
                                case "audio":
                                  $post_meta =  get_post_meta(get_the_id() ,'_dt_post_settings', true);
                                  $post_meta = is_array($post_meta) ? $post_meta : array();
                                  if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ):
                                      if( array_key_exists('oembed-url', $post_meta) ):
                                          echo wp_oembed_get($post_meta['oembed-url']);
                                      elseif( array_key_exists('self-hosted-url', $post_meta) ):
                                          echo wp_audio_shortcode( array('src' => $post_meta['self-hosted-url']) );
                                      endif;
                                  endif;
                                break;
    
                                default:
                                  if( has_post_thumbnail() && isset($meta_set['disable-featured-image']) == "" ): ?>
                                      <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php
                                          $attr = array('title' => get_the_title()); the_post_thumbnail($feature_image, $attr); ?>
                                      </a><?php
                                  elseif($pholder == "true" && isset($meta_set['disable-featured-image']) == ""): ?>
                                      <a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
                                          <img src="http<?php whistle_ssl(true);?>://placehold.it/1168x600&text=<?php the_title(); ?>" width="1168" height="600" alt="<?php the_title(); ?>" />
                                      </a><?php
                                  endif;
                                break;
                            endswitch; ?>
                        </div>
                        <div class="entry-meta"><?php
                            if(isset($meta_set['disable-date-info']) == ""): ?>
                                <div class="date">
                                    <?php echo get_the_date('d'); ?> <?php echo get_the_date('M'); ?> <?php echo get_the_date('Y'); ?>
                                </div><?php
                            endif; ?>
                            <div class="post-meta"><?php
                                echo ' / &nbsp;';
                                if(isset($meta_set['disable-author-info']) == ""):
                                    esc_html_e('by ', 'whistle'); ?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('display_name'); ?></a>&nbsp; / &nbsp;<?php
                                endif;
                                if(isset($meta_set['disable-category-info']) == "" && count(get_the_category())):
                                    the_category(', ');
                                    echo '&nbsp; / &nbsp;';
                                endif;
                                if(isset($meta_set['disable-comment-info']) == ""): ?>
                                    <?php comments_popup_link(esc_html__('No Comments', 'whistle'), esc_html__('1 Comment', 'whistle'), esc_html__('% Comments', 'whistle'), '', esc_html__('No Comments', 'whistle')); ?><?php
                                endif; ?>
                            </div>
                        </div>
                        <div class="entry-title">
                            <?php if(is_sticky()): ?>
                                <div class="featured-post"><span><?php esc_html_e('Featured','whistle'); ?></span></div>
                            <?php endif; ?>
                            <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                        </div><?php
                        #Post top code...
                        if(whistle_option('integration', 'enable-single-post-top-code') != '') echo whistle_wp_kses(stripslashes(whistle_option('integration', 'single-post-top-code')));
                        the_content();
                        wp_link_pages(array('before' => '<div class="page-link"><strong>'.esc_html__('Pages:', 'whistle').'</strong> ', 'after' => '</div>', 'next_or_number' => 'number'));
                        edit_post_link(esc_html__('Edit', 'whistle'), '<span class="edit-link">', '</span>' );
                        echo '<div class="social-bookmark">';
                        whistle_show_fblike('post'); whistle_show_googleplus('post'); whistle_show_twitter('post'); whistle_show_stumbleupon('post'); whistle_show_linkedin('post'); whistle_show_delicious('post'); whistle_show_pintrest('post'); whistle_show_digg('post');																
                        echo '</div>';
						echo '<div class="dt-sc-clear"></div><div class="dt-sc-hr-invisible"></div>';
                        whistle_social_bookmarks('sb-post');
                        if(whistle_option('integration', 'enable-single-post-bottom-code') != '') echo whistle_wp_kses(stripslashes(whistle_option('integration', 'single-post-bottom-code'))); ?>
                    </div>
                </article>
    
                <div class="author-info">
                    <h2 class="section-title"><?php esc_html_e('About the Author', 'whistle'); ?></h2>
                    <div class="thumb">
                        <?php echo get_avatar(get_the_author_meta('user_email'), $size = '85'); ?>
                    </div>
                    <div class="author-desc">
                        <div class="author-title"><?php
                            $user_info = get_userdata(get_the_author_meta('ID')); ?>
                            <p><?php esc_html_e('By', 'whistle'); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php echo $user_info->user_login; ?></a> / <?php echo ucfirst(implode(', ', $user_info->roles)); ?> <span><?php esc_html_e('on', 'whistle'); echo get_the_date(' M d, Y'); ?></span></p>
                        </div>
                        <p><?php the_author_meta('description'); ?></p>
                    </div>
                </div>
                <?php if(whistle_option('general', 'global-post-comment') != true && (isset($meta_set['disable-comment']) == "")) comments_template('', true); ?>
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