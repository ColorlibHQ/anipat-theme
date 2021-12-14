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

	$anipat_reservation_title     = !empty( anipat_opt( 'anipat_reservation_title' ) ) ? anipat_opt( 'anipat_reservation_title' ) : '';
	$anipat_reservation_sub_title = !empty( anipat_opt( 'anipat_reservation_sub_title' ) ) ? anipat_opt( 'anipat_reservation_sub_title' ) : '';
	$anipat_reservation_btn_text  = !empty( anipat_opt( 'anipat_reservation_btn_text' ) ) ? anipat_opt( 'anipat_reservation_btn_text' ) : '';
	$anipat_reservation_btn_url	  = !empty( anipat_opt( 'anipat_reservation_btn_url' ) ) ? anipat_opt( 'anipat_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $anipat_reservation_title )?></h3>
			<p><?php echo esc_html( $anipat_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $anipat_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $anipat_reservation_btn_text )?></a>
		</div>
	</div>