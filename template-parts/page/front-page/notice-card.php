<?php
$post = get_query_var('post');
$ID = $post->ID;
$post_title = $post->post_title;
$feature_images = get_post_thumbnail_id( $ID  )? wp_get_attachment_image_src( get_post_thumbnail_id( $ID  ), 'full' )[0]:get_theme_mod( 'image_footer_setting',NEWASIPI_URL.'/assets/images/asipi-logo-footer.png');

?>
<div class="p-4 publicacion-owl evento card bg-color-light box-shadow-1 box-shadow-1-hover">
    <div class="row">
        <div class="col-lg-5">
            <img src="<?php echo $feature_images;?>" class="rounded img-fluid" alt="Lorem Ipsum Dolor" />
        </div>
        <div class="mt-4 col-lg-7 mt-lg-0">
            <h4 class="mb-2 font-weight-bold text-3 text-primary"><?php echo $post_title; ?></h4>
                <a href="<?php echo get_permalink($ID);?>" class="btn btn-outline btn-rounded btn-secondary font-weight-bold text-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Ver más</a>
        </div>
    </div>
</div>