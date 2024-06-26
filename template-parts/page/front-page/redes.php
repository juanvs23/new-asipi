<section class="section section-height-5 section-with-shape-divider border-0 lazyload my-0" data-bg-src=""
    style="border: solid red;">
    <div class="shape-divider shape-divider-reverse-x" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#008036" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
        c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
        c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
        c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
        c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z" />
        </svg>
    </div>
    <div class="container">
        <div class="row pb-2 mb-3">

            <div class="col-md-6">

                <div class="row justify-content-center p-3 align-items-end">
                    <div class="col-md-8">
                        <h2 class="text-color-primary font-weight-bold mb-2 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">Newsletter</h2>
                    </div>
                    <div class="col-md-4 justify-content-lg-end" style="display: flex;">
                        <a href="<?php echo home_url();?>/category/asipi-news/"
                            class="btn btn-outline btn-rounded btn-primary font-weight-bold text-2 btn-sm appear-animation mb-3"
                            data-appear-animation="fadeInLeftShorter"
                            data-appear-animation-delay="800"><?php echo __("<!--:es-->Ver todos <!--:--><!--:en-->View all<!--:-->");?></a>
                    </div>
                </div>


                <div class="evento card bg-color-light p-5">
                    <div class="row align-items-center">
                        <?php
                $args = array(
                    'category_name' => 'asipi-news',
                    'posts_per_page' => 3,
                );
                
                // Instantiate new query instance.
                $mquery = new WP_Query( $args );
                if ( $mquery->have_posts() ) {
                    while ( $mquery->have_posts() ) {
                        $mquery->the_post();

                        $title = get_the_title();
                        $feature_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' )[0];
                ?>
                        <div class="col">
                            <p class="text-color-primary font-weight-bold text-4 mt-3"><?php echo $title; ?></p>
                            <img src="<?php echo  $feature_image; ?>" class="img-fluid mb-4" align>
                        </div>
                        <?php
                    }
                }
                wp_reset_postdata();
                ?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="font-weight-bold text-primary text-center">
                                <?php echo __("<!--:es-->Suscríbete a nuestro Newsletter<!--:--><!--:en-->Subscribe to our Newsletter<!--:-->");?>
                            </h4>
                            <?php  echo do_shortcode('[mc4wp_form id=145]'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="row justify-content-center p-3 align-items-end pb-0">
                    <div class="col-md-8">
                        <h4 class="text-color-primary font-weight-bold mb-2 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">Twitter X</h4>
                    </div>
                    <div class="col-md-4 justify-content-lg-end" style="display: flex;">
                        <a href="https://twitter.com/ASIPI_" target="_blank"
                            class="btn btn-outline btn-rounded btn-primary font-weight-bold text-2 btn-sm appear-animation mb-3"
                            data-appear-animation="fadeInLeftShorter"
                            data-appear-animation-delay="800"><?php echo __("<!--:es-->Seguir<!--:--><!--:en-->Follow<!--:-->");?></a>
                    </div>
                </div>

                <div class="evento card bg-color-light p-3">
                    <a class="twitter-timeline" data-height="200"
                        href="https://twitter.com/ASIPI_?ref_src=twsrc%5Etfw">Tweets by ASIPI_</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <div class="row justify-content-center p-3 align-items-end pb-0 mt-5">
                    <div class="col-md-8">
                        <h4 class="text-color-primary font-weight-bold mb-2 appear-animation animated fadeInUpShorter appear-animation-visible"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">LinkedIn</h4>
                    </div>
                    <div class="col-md-4 justify-content-lg-end" style="display: flex;">
                        <a href="https://www.linkedin.com/company/asociaci-n-interamericana-de-la-propiedad-intelectual-asipi-/"
                            target="_blank"
                            class="btn btn-outline btn-rounded btn-primary font-weight-bold text-2 btn-sm appear-animation mb-3"
                            data-appear-animation="fadeInLeftShorter"
                            data-appear-animation-delay="800"><?php echo __("<!--:es-->Seguir<!--:--><!--:en-->Follow<!--:-->");?></a>
                    </div>
                </div>

                <div class="evento card bg-color-light p-3">
                    <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:7180667247776964608"
                        height="190" width="504" frameborder="0" allowfullscreen=""
                        title="Publicación integrada"></iframe>
                </div>
            </div>

        </div>
    </div>
    <div class="shape-divider shape-divider-bottom" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#FFF" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
        c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
        c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
        c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
        c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z" />
        </svg>
    </div>
</section>