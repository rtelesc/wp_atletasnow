<?php get_header();

	  #Getting meta values...
	  $page_layout = whistle_option('specialty', 'search-layout'); ?>

      <section class="fullwidth-background">
          <div class="breadcrumb-wrapper <?php if(whistle_option('general','header-top-bar') == "true") echo esc_attr('notop'); ?>">
              <div class="container">
                  <h1><?php printf(esc_html__('Search Results for : %s', 'whistle'), get_search_query()); ?></h1>
                  <?php new whistle_breadcrumb; ?>
              </div>
          </div>
      </section>    

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
              <?php endif; ?>
    
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
                    #Performing archive layout...
                    get_template_part('includes/archive-post-layout'); ?>
                </article>
              </section>
    
              <?php if($page_layout == 'with-right-sidebar'): ?>
                <section class="secondary-sidebar secondary-has-right-sidebar" id="secondary-right"><?php get_sidebar('right'); ?></section>
              <?php elseif($page_layout == 'with-both-sidebar'): ?>
                <section class="secondary-sidebar secondary-has-both-sidebar" id="secondary-right"><?php get_sidebar('right'); ?></section>
              <?php endif; ?>
          </div>
      </div>

<?php get_footer(); ?>