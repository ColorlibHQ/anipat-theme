<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Anipat
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

$page_title = ! empty( anipat_meta( 'page_title') ) ? anipat_meta( 'page_title') : '';
$banner_img = ! empty( anipat_meta( 'banner_img') ) ? anipat_meta( 'banner_img') : '';
$headerimg  = (isset($banner_img['image']) && $banner_img['image'] != '') ? $banner_img['image'] : get_header_image();
?>

<section class="hero-banner zigzag_bg_2" <?php echo anipat_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row justify-content-center">
            <div class="breadcrumb_tittle">
                <?php
                    if ( $page_title ) {
                        echo '<span>'.esc_html($page_title).'</span>';
                    }
                ?>
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'anipat') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'anipat') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'anipat' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'anipat' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'anipat' );

                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>