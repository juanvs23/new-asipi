<!--Navigation-->
<?php
                        wp_nav_menu(
                            array(
                                'container_id'    => 'primary-menu',
                                'container_class' => 'closed collapse',
                                'menu_class'      => 'nav nav-pills',
                                'menu_id'         => 'mainNav',
                                'theme_location'  => 'primary',
                                'li_class'        => '',
                                'fallback_cb'     => false,
                            )
                        );
            ?>

<!--End navigation-->