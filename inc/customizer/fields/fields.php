<?php 
/**
 * @Packge     : Anipat
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
// Epsilon_Customizer::add_field(
//     'anipat_theme_color',
//     array(
//         'type'        => 'epsilon-color-picker',
//         'label'       => esc_html__( 'Theme Color', 'anipat' ),
//         'description' => esc_html__( 'Select the theme color.', 'anipat' ),
//         'sanitize_callback' => 'sanitize_text_field',
//         'section'     => 'anipat_general_section',
//         'default'     => '#131313',
//     )
// );

// Header top phone number
Epsilon_Customizer::add_field(
    'anipat_header_top_phone',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Phone Number', 'anipat' ),
        'section'     => 'anipat_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '+880 4664 216', 'anipat' ),
    )
);

// Header top time table
Epsilon_Customizer::add_field(
    'anipat_header_top_time_table',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Time Table', 'anipat' ),
        'section'     => 'anipat_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Mon - Sat 10:00 - 7:00', 'anipat' ),
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'anipat' ),
        'section'     => 'anipat_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'anipat_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'anipat' ),
        'description' => esc_html__( 'Select the header background color.', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'anipat_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'anipat_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'anipat_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'anipat_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_header_section',
        'default'     => '#808080',
    )
);


// Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'anipat' ),
        'section'     => 'anipat_social_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'anipat_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'anipat' ),
        'section'     => 'anipat_social_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'anipat_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'anipat_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'anipat' ),
        'button_label' => esc_html__( 'Add new social link', 'anipat' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'anipat' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Google Plus', 'anipat' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-google-plus',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'anipat' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'anipat' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'anipat' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'anipat' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'anipat' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'anipat_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'anipat' ),
        'description' => esc_html__( 'Set post excerpt length.', 'anipat' ),
        'section'     => 'anipat_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'anipat_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'anipat' ),
        'section'     => 'anipat_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'anipat_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'anipat' ),
        'section'     => 'anipat_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'anipat_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'anipat' ),
        'section'     => 'anipat_blog_section',
        'default'     => true
    )
);
 

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'anipat' ),
        'section'     => 'anipat_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'anipat_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'anipat' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'anipat' ),
        'section'     => 'anipat_footer_section',
        'default'     => true,
    )
);

// Footer Additional Settings section
Epsilon_Customizer::add_field(
    'footer_additional_settings_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Additional Settings', 'anipat' ),
        'section'     => 'anipat_footer_section',

    )
);


// Footer short text field
Epsilon_Customizer::add_field(
    'anipat_footer_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Footer short text', 'anipat' ),
        'section'           => 'anipat_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '239 E 5th St, New York 
        NY 10003, USA',
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'anipat_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'anipat' ),
        'section'           => 'anipat_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'anipat_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'anipat' ),
        'section'           => 'anipat_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'anipat_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'anipat_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'anipat_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'anipat_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'anipat' ),
        'section'     => 'anipat_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'anipat' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'anipat_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'anipat' ),
        'section'     => 'anipat_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'anipat_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer BG Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_footer_section',
        'default'     => '#f8f8f8',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'anipat_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_footer_section',
        'default'     => '#2e2e2e',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'anipat_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_footer_section',
        'default'     => '#7a7a7a',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'anipat_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_footer_section',
        'default'     => '#7a7a7a',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'anipat_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'anipat' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'anipat_footer_section',
        'default'     => '#eb592d',
    )
);

