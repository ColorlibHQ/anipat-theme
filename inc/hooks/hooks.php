<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'anipat_preloader', 'anipat_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'anipat_header', 'anipat_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'anipat_footer', 'anipat_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'anipat_wrp_start', 'anipat_wrp_start_cb', 10 );
	add_action( 'anipat_wrp_end', 'anipat_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'anipat_blog_col_start', 'anipat_blog_col_start_cb', 10 );
	add_action( 'anipat_blog_col_end', 'anipat_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'anipat_blog_posts_thumb', 'anipat_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'anipat_blog_details_wrap_start', 'anipat_blog_details_wrap_start_cb', 10 );
	add_action( 'anipat_blog_details_wrap_end', 'anipat_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'anipat_blog_posts_title', 'anipat_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'anipat_blog_posts_meta', 'anipat_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'anipat_blog_posts_excerpt', 'anipat_blog_posts_excerpt_cb', 10 );
	// add_action( 'anipat_blog_posts_excerpt', 'anipat_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'anipat_blog_posts_info_link', 'anipat_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'anipat_blog_posts_content', 'anipat_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'anipat_blog_posts_share', 'anipat_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'anipat_blog_sidebar', 'anipat_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'anipat_blog_single_meta', 'anipat_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'anipat_page_content', 'anipat_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'anipat_fof', 'anipat_fof_cb', 10 );

	

?>