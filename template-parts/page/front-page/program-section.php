<section class="py-4 border-0 section-height-5 section-with-shape-divider lazyloaded">
    <div class="container">
        <div class="pb-2 mb-3 row justify-content-center">
            <div class="text-center col-md-9 col-lg-12">
            <h2 class="mb-3 text-color-dark font-weight-bold line-height-6 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">Programas</h2>
            </div>
        </div>
        <div class="d-flex justify-content-center row">
                <?php 
                $query_program = new WP_Query(array(
                    'post_type' => 'newasipi_pos_program',
                    'posts_per_page' => -1,

                ));
                if($query_program->have_posts()){
                    while($query_program->have_posts()){
                        $query_program->the_post();
                        cardItem(get_the_ID());
                    }
                    wp_reset_postdata();
                }
                ?>
                
        </div>
    </div>
</section>

<?php
function cardItem($post){
    $title = get_the_title($post);
    $feature_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post ), 'full' )[0];
    $the_permalink = get_the_permalink($post);
    ?>
        <div class="col-2 programa-logos appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
            <a class="twitter-timeline" data-height="200" title="<?php echo $title; ?>" href="<?php echo $the_permalink; ?>" data-twitter-extracted-i1712867020681701335="true">
                <img src="<?php echo $feature_image; ?>" class="img-fluid" alt="<?php echo $title;?>" align="">
            </a>
        </div>
    <?php

}