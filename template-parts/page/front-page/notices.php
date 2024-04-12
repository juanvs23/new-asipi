<section class="pt-0 my-0 border-0 section bg-gradient-verde section-height-2 section-with-shape-divider lazyload" >
    <div class="container">
        <div class="py-5 mb-3 row justify-content-center">
            <div class="col-md-9 col-lg-12">
                <h1 class="mb-5 text-center text-color-light font-weight-bold line-height-6 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                        Últimas Publicaciones
                </h1>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="col">
                        <div class="owl-carousel nav-outside nav-arrows-1 custom-carousel-box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 2}, '1199': {'items':3}}, 'autoplay': false, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': false, 'margin': 20, 'stagePadding': '75'}">
                            <?php 
                            $query = new WP_Query( array(
                                'post_type' => 'post',
                                'posts_per_page' => 10,
                            ));
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    //echo'1';
                                    set_query_var( 'post', $query->post );
                                    get_template_part( 'template-parts/page/front-page/notice-card' );
                                }
                            }
                            wp_reset_postdata();
                            ?>
                           
                    </div>
                </div>
            </div>
                                        <div class="text-center">
                <a href="#" class="mt-5 mb-0 btn btn-rounded btn-gradient-azul text-color-light custom-btn-effect-1 custom-border-radius-1 d-inline-flex align-items-center font-weight-semibold text-3-5 btn-px-5 btn-py-3 appear-animation" data-hash data-hash-offset="0" data-hash-offset-lg="32" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="1.7s">
                Ver todas las publicaciones
                </a>
                                        </div>
        </div>
    </div>
    </div>
</section>
    