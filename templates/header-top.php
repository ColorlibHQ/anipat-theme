<?php
    $phone_number = anipat_opt( 'anipat_header_top_phone' );
    $time_table = anipat_opt( 'anipat_header_top_time_table' );
?>
<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="short_contact_list">
                            <ul>
                                <?php
                                    if ( $phone_number ) {
                                        echo '
                                        <li><a href="tel:'.esc_attr($phone_number).'">'.esc_html($phone_number).'</a></li>
                                        ';
                                    }
                                    if ( $time_table ) {
                                        echo '
                                        <li><a>'.esc_html($time_table).'</a></li>
                                        ';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 ">
                        <?php
                            // Social profiles
                            $social_opt = anipat_opt('anipat_social_profile_toggle');
                            if ( $social_opt == true ) {
                                $social_items = anipat_opt('anipat_social_profiles');
                                if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                    echo '<div class="social_media_links">';
                                        foreach ($social_items as $value) {
                                            echo '<a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr( $value['social_icon']) .'"></i> </a>';
                                        }
                                    echo '</div>';
                                }          
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <?php echo anipat_theme_logo();?>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'            => 'primary-menu',
                                        'theme_location'  => 'primary-menu',
                                        'menu_id'         => 'navigation',
                                        'container_class' => false,
                                        'container_id'    => false,
                                        'menu_class'      => false,
                                        'depth'           => 3,
                                        'walker'          => new anipat_bootstrap_navwalker()
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>