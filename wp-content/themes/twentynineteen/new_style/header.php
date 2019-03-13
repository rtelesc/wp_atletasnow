<!doctype html>
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>

	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php whistle_moible_view(); ?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php
	#Load Theme Styles...
	do_action( 'whistle_hook_top' );
	wp_head(); ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MFSGRJD');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFSGRJD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php if(whistle_option('general','loading-bar') != "true") echo '<div id="loader-wrapper"><div class="loader-inner square-spin"><img width="64" height="64" src="'.get_template_directory_uri().'/images/loader.gif" /></div></div>'; ?>
	

	<!-- **Wrapper** -->
	<div class="wrapper">
    	<div class="inner-wrapper">
			<?php if(whistle_option('general','header-top-bar') != "true"): ?>
                <!-- Top bar starts here -->
                <div class="top-bar">
                    <div class="container">
                        <?php if(whistle_option('general', 'top-bar-left-content') != NULL): ?>
                            <div class="dt-sc-contact-info">
                                <p><?php echo whistle_wp_kses(do_shortcode(stripslashes(whistle_option('general', 'top-bar-left-content')))); ?></p>
                            </div><?php
                        endif; ?>
                        <div class="top-right">
                            <ul><?php
                            if(!is_user_logged_in()):
								$loginurl = ( class_exists('c_ws_plugin__s2member_check_activation') ) ? wp_login_url() : wp_login_url(get_permalink()); ?>
                                <li><a title="<?php esc_attr_e('Login', 'whistle'); ?>" href="<?php echo $loginurl; ?>"><span class="fa fa-sign-in"></span><?php esc_html_e('Member Login', 'whistle'); ?></a></li>
                                <li><a title="<?php esc_attr_e('Register Now', 'whistle'); ?>" href="<?php echo wp_registration_url(); ?>"><span class="fa fa-user"></span><?php esc_html_e('Register', 'whistle'); ?></a></li><?php
                            else: ?>
                                <li><a title="<?php esc_attr_e('Logout', 'whistle'); ?>" href="<?php echo wp_logout_url(get_permalink()); ?>"><span class="fa fa-sign-out"></span><?php esc_html_e('Logout', 'whistle'); ?></a></li>
                                <li><a title="<?php esc_attr_e('My Profile', 'whistle'); ?>" href="<?php 
                                    $current_user = wp_get_current_user();
                                    echo get_edit_user_link($current_user->ID); ?>"><span class="fa fa-dashboard"></span><?php esc_html_e('My Profile', 'whistle'); ?></a></li><?php
                            endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Top bar ends here -->
            <?php endif; ?>
        	<!-- header-wrapper starts here -->
			<?php $htype = whistle_option('appearance','header_type'); $htype = !empty($htype) ? $htype : 'header1'; ?>
        	<div id="header-wrapper" class="<?php if(whistle_option('general','header-top-bar') == "true") echo esc_attr('notop-bar'); if($htype == 'header3') echo esc_attr(' header3-wrapper'); ?>">
            	<header id="header" class="<?php echo esc_attr($htype); ?>"><?php
				if($htype == 'header3'): ?>
                    <div id="logo"><?php
                        if( whistle_option('general', 'logo') ):
                            $template_uri = get_template_directory_uri();
                            $url = whistle_option('general', 'logo-url');
                            $url = !empty( $url ) ? $url : $template_uri."/images/logo.png";

                            $retina_url = whistle_option('general','retina-logo-url');
                            $retina_url = !empty($retina_url) ? $retina_url : $template_uri."/images/logo@2x.png";

                            $width = whistle_option('general','retina-logo-width');
                            $width = !empty($width) ? $width."px;" : "146px";

                            $height = whistle_option('general','retina-logo-height');
                            $height = !empty($height) ? $height."px;" : "30px";?>
                            <a href="<?php echo esc_url(home_url());?>" title="<?php bloginfo('title'); ?>">
                                <img class="normal_logo" src="<?php echo esc_url($url);?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" />
                                <img class="retina_logo" src="<?php echo esc_url($retina_url);?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" style="width:<?php echo esc_attr($width);?>; height:<?php echo esc_attr($height);?>;"/>
                            </a><?php
                        else: ?>
                            <div class="logo-title">
                                <h1 id="site-title"><a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
                                <h2 id="site-description"><?php bloginfo('description'); ?></h2>
                            </div><?php
                        endif; ?>
                    </div>
					<div class="main-menu-container">
                    	<div class="main-menu">
                            <div id="primary-menu">
                                <div class="dt-menu-toggle" id="dt-menu-toggle"><?php esc_html_e('Menu','whistle'); ?><span class="dt-menu-toggle-icon"></span></div><?php
								if(function_exists("is_woocommerce")): ?>
	                                <div class="header-cart"><a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php esc_attr_e( 'View Shopping Cart', 'whistle' ); ?>"><i class="fa fa-shopping-cart"></i><span><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count, 'whistle'), WC()->cart->cart_contents_count ); ?></span></a></div><?php
								endif; ?>
                                <nav id="main-menu">
                                    <?php wp_nav_menu( array('theme_location' => 'primary-menu', 'container'  => false, 'menu_id' => 'menu-main-menu', 'menu_class' => 'menu', 'fallback_cb' => 'whistle_default_navigation', 'walker' => new WhistleFrontEndMenuWalker())); ?>
                                </nav>
                            </div>
                        </div>
                    </div><?php
				else: ?>
					<div class="main-menu-container">
                    	<div class="main-menu">
                            <div id="logo"><?php
                                if( whistle_option('general', 'logo') ):
                                    $template_uri = get_template_directory_uri();
                                    $url = whistle_option('general', 'logo-url');
                                    $url = !empty( $url ) ? $url : $template_uri."/images/logo.png";
    
                                    $retina_url = whistle_option('general','retina-logo-url');
                                    $retina_url = !empty($retina_url) ? $retina_url : $template_uri."/images/logo@2x.png";
    
                                    $width = whistle_option('general','retina-logo-width');
                                    $width = !empty($width) ? $width."px;" : "146px";
    
                                    $height = whistle_option('general','retina-logo-height');
                                    $height = !empty($height) ? $height."px;" : "30px";?>
                                    <a href="<?php echo esc_url(home_url());?>" title="<?php bloginfo('title'); ?>">
                                        <img class="normal_logo" src="<?php echo esc_url($url);?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" />
                                        <img class="retina_logo" src="<?php echo esc_url($retina_url);?>" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" style="width:<?php echo esc_attr($width);?>; height:<?php echo esc_attr($height);?>;"/>
                                    </a><?php
                                else: ?>
                                    <div class="logo-title">
                                        <h1 id="site-title"><a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
                                        <h2 id="site-description"><?php bloginfo('description'); ?></h2>
                                    </div><?php
                                endif; ?>
                            </div>
                            <div id="primary-menu"><?php
								if(function_exists("is_woocommerce") && ($htype != 'header3')): ?>
	                                <div class="header-cart"><a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php esc_attr_e( 'View Shopping Cart', 'whistle' ); ?>"><i class="fa fa-shopping-cart"></i><span><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count, 'whistle'), WC()->cart->cart_contents_count ); ?></span></a></div><?php
								endif; ?>                            
                                <div class="dt-menu-toggle" id="dt-menu-toggle"><?php esc_html_e('Menu','whistle'); ?><span class="dt-menu-toggle-icon"></span></div>
                                <nav id="main-menu">
                                    <?php wp_nav_menu( array('theme_location' => 'primary-menu', 'container'  => false, 'menu_id' => 'menu-main-menu', 'menu_class' => 'menu', 'fallback_cb' => 'whistle_default_navigation', 'walker' => new WhistleFrontEndMenuWalker())); ?>
                                </nav>
                            </div>
                        </div>
                    </div><?php
				endif; ?>
				</header>
			</div>
