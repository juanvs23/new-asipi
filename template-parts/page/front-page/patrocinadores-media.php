<?php 
$title_media=get_post_meta($post->ID,'_title_media', true);
$shortcode_media=get_post_meta($post->ID,'_shortcode_media', true);
$title_academico=get_post_meta($post->ID,'_title_academico', true);
$image_academico=get_post_meta($post->ID,'_image_academico', true);
?>
<section class="section border-0 bg-light m-0 p-0">
    <div class="container py-5 mt-4">
        <div class="row">
            <div class="col-md-3 col-lg-3">
            <h2 class="text-color-dark font-weight-bold line-height-6 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;"><?php echo esc_attr($title_academico); ?></h2>
            <div class="row text-center mt-5">
                <div>
                    <img class="img-fluid" src="<?php echo esc_attr($image_academico); ?>" alt="">
                </div>
            </div>
            </div>
            <div class="col-md-9 col-lg-9">
            <h2 class="text-color-dark font-weight-bold line-height-6 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <?php echo esc_attr($title_media); ?>	
            </h2>
            <div class="text-center mt-5">
            <?php echo do_shortcode($shortcode_media); ?>
            </div>
            </div>
        </div>
    </div>
</section>
