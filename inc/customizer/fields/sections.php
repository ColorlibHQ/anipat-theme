<?php 
/**
 * @Packge     : Anipat
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'anipat_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'anipat' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    // array(
    //     'id'   => 'anipat_general_section',
    //     'args' => array(
    //         'title'    => esc_html__( 'General', 'anipat' ),
    //         'panel'    => 'anipat_theme_options_panel',
    //         'priority' => 1,
    //     ),
    // ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'anipat_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'anipat' ),
            'panel'    => 'anipat_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'anipat_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'anipat' ),
            'panel'    => 'anipat_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'anipat_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'anipat' ),
            'panel'    => 'anipat_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'anipat_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'anipat' ),
            'panel'    => 'anipat_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'anipat_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'anipat' ),
            'panel'    => 'anipat_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'anipat_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'anipat' ),
            'panel'    => 'anipat_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'anipat_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'anipat' ),
            'panel'    => 'anipat_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>