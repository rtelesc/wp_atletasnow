<?php get_header();

	  #Getting meta values...
	  $page_layout = whistle_option('specialty', 'post-archives-layout'); ?>

	  <section class="fullwidth-background">
          <div class="breadcrumb-wrapper <?php if(whistle_option('general','header-top-bar') == "true") echo esc_attr('notop'); ?>">
              <div class="container">
                  <h1><?php if(is_category()): esc_html_e('Category Archives of : ', 'whistle'); echo single_cat_title();
                              elseif(is_day()):  esc_html_e('Daily Archives of : ', 'whistle'); echo get_the_date('l');
                              elseif(is_month()):  esc_html_e('Monthly Archives of : ', 'whistle'); echo get_the_date('F, Y');
                              elseif(is_year()):  esc_html_e('Yearly Archives of : ', 'whistle'); echo get_the_date('Y');
                              elseif(is_author()):  esc_html_e('Archive by Author : ', 'whistle'); $author = get_user_by('login', get_query_var('author_name')); echo $author->nickname;
                              elseif(is_tag()):  esc_html_e('Tag Archives of : ', 'whistle'); echo single_tag_title('', true);
                              elseif(taxonomy_exists('category')):  esc_html_e('Archive of : ', 'whistle'); echo single_cat_title();
                              endif; ?></h1>
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