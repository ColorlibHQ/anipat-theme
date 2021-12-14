<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Anipat
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$footer_logo_img_id = get_theme_mod( 'footer_logo_img' );
	$footer_logo_img 	= !empty($footer_logo_img_id) ? wp_get_attachment_image_src( $footer_logo_img_id, 'anipat_site_logo_146x36' )[0] : '';
	$footer_short_text  = !empty( anipat_opt( 'anipat_footer_text' ) ) ? anipat_opt( 'anipat_footer_text' ) : '239 E 5th St, New York 
	NY 10003, USA';
	$site_url 	    	= home_url('/');	
			
	// Footer widget 1
	if( is_active_sidebar( 'footer-1' ) ){
		dynamic_sidebar( 'footer-1' );
	}
			
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		dynamic_sidebar( 'footer-2' );
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}
	?>

	<div class="col-xl-3 col-md-6 col-lg-3">
		<div class="footer_widget">
			<div class="footer_logo">
				<?php
					if ( $footer_logo_img ) {
						?>
							<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url($footer_logo_img)?>" alt="footer logo"></a>
						<?php
					} else {
						echo anipat_theme_logo();
					}
				?>
			</div>
			<p class="address_text"><?php echo wp_kses_post( $footer_short_text );?></p>
			<?php
				// Social profiles
				$social_opt = anipat_opt('anipat_social_profile_toggle');
				if ( $social_opt == true ) {
					$social_items = anipat_opt('anipat_social_profiles');
					if( is_array( $social_items ) && count( $social_items ) > 0 ){
						echo '<div class="socail_links"><ul>';
							foreach ($social_items as $value) {
								echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr( $value['social_icon'] ) .'"></i> </a></li>';
							}
						echo '</ul></div>';
					}          
				} 
			?>
		</div>
	</div>