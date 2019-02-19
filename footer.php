<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtCamp
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
            
            <?php get_sidebar('footer'); ?>
     
                 
            <div class="bg container clearfix">
                <div class="footer-left col-9 full-width">
                <nav id="site-navigation" class="main-navigation ">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
                        
		</nav><!-- #site-navigation -->
                <div class="copy">
                    
                    &copy;2011 rtpanel. All Rights Reserved. Designed by rtcamp 
                </div>
                </div>
		<div class="site-branding col-4 full-width" >
		
                    <img width="277" height="85" src="http://13.233.94.201/wp-content/uploads/2019/02/footer-logo.png" class="custom-logo" alt="rtCamp" itemprop="logo">
				
		</div><!-- .site-branding -->

		
            </div>
              
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
