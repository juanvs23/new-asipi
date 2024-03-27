<!--Navigation-->
<?php
                        /*wp_nav_menu(
                            array(
                                'container_id'    => 'primary-menu',
                                'container_class' => 'collapse',
                                'menu_class'      => 'nav nav-pills',
                                'menu_id'         => 'mainNav',
                                'theme_location'  => 'primary',
                                'li_class'        => '',
                                'fallback_cb'     => false,
                            )
                        );*/
?>

    <div class="header-column justify-content-end">
        <div class="header-row">
            <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                    <nav class="collapse">
                        <?php
                        wp_nav_menu1(
                            array(
                                'menu_class'      => 'nav nav-pills',
                                'menu_id'         => 'mainNav',
                                'theme_location'  => 'primary',
                                'walker' => new WP_Custom_Nav_Walker(),
                            )
                        );
                        ?>
                    </nav>
                </div>
                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

        </div>
    </div>


<!--End navigation-->