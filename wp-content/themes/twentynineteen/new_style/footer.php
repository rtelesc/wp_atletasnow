        <!-- footer starts here -->
        <footer id="footer">
            <div class="footer-widgets-wrapper">
				<?php if(whistle_option('general','show-footer') != ''): ?>
                    <div class="container">
                        <?php whistle_show_footer_widgetarea(whistle_option('general','footer-columns')); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="copyright">
                <div class="container"><?php
					#Footer Menu...
					wp_nav_menu( array('theme_location' => 'secondary-menu', 'container'  => false, 'menu_class' => 'footer-links', 'fallback_cb' => 'whistle_footer_navigation')); ?>

                    <?php if(whistle_option('general','show-copyrighttext') != ''): ?>
	                    <p><?php echo whistle_wp_kses(stripslashes(whistle_option('general','copyright-text'))); ?></p>
					<?php endif; ?>
                </div>
            </div>
        </footer><!-- footer ends here -->

	</div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->
<?php do_action( 'whistle_hook_bottom' );
wp_footer(); ?>
</body>
</html>