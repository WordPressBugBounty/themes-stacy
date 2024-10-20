<?php
/**
 * Template file for footer area
 */
$stacy_footer_copyright = get_theme_mod('footer_copyright_text','<p>'.__( 'Proudly powered by <a href="https://wordpress.org">WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">Stacy</a> by SpiceThemes', 'stacy' ).'</p>');
?>
<!-- Footer Section -->
<?php if ( is_active_sidebar( 'footer_widget_area_left' ) || is_active_sidebar( 'footer_widget_area_center' ) ||  is_active_sidebar( 'footer_widget_area_right' ) || ($stacy_footer_copyright != null) ) : ?>
	<footer class="site-footer">		
		<div class="container">
			
			   <?php get_template_part('sidebar','footer');?>
			
			<?php if($stacy_footer_copyright != null): ?>
				<div class="row">
				<div class="col-md-12">
						<?php 
						$stacy_user=get_option('stacy_user_with_1_3_7');
		  				if($stacy_user='old'){ ?>
						<div class="site-info wow fadeIn animated" data-wow-delay="0.4s">
							<?php echo wp_kses_post($stacy_footer_copyright); ?>
						</div>
						<?php }else{?>
					    <div class="site-info wow fadeIn animated" data-wow-delay="0.4s">
					         <p><?php esc_html_e( 'Proudly powered by', 'stacy' ); ?> <a href="<?php echo esc_url( __( 'https://wordpress.org', 'stacy' ) ); ?>"><?php esc_html_e( 'WordPress', 'stacy' ); ?> </a> <?php esc_html_e( '| Theme:', 'stacy' ); ?> <a href="<?php echo esc_url( __( 'https://spicethemes.com', 'stacy' ) ); ?>" rel="nofollow"> <?php esc_html_e( 'SpicePress', 'stacy' ); ?></a> <?php esc_html_e( 'by SpiceThemes', 'stacy' );?></p>
					    </div>  
						<?php } ?>
					</div>			
				</div>	
			<?php endif; ?>
			
		</div>
	</footer>
<?php endif; ?>
<!-- /Footer Section -->
<div class="clearfix"></div>
</div><!--Close of wrapper-->
<!--Scroll To Top--> 
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top--> 
<?php wp_footer(); ?>
</body>
</html>