<?php 
$title_institucional=get_post_meta($post->ID,'_title_institucional', true);
$shortcode_institucional=get_post_meta($post->ID,'_shortcode_institucional', true);
?>

<section class="section section-height-5 section-with-shape-divider border-0 lazyload my-5" data-bg-src="">
    <div class="shape-divider shape-divider-reverse-x" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#FFF" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
        </svg>
    </div>
    <div class="container">
        <div class="col-md-9 col-lg-12">
            <h2 class="text-color-dark font-weight-bold line-height-6 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;width: 39%;"><?php echo esc_attr($title_institucional); ?></h2>
        </div>
        <div class="text-center mt-5">
        <?php echo do_shortcode($shortcode_institucional); ?>
        </div>
    </div>
    <div class="shape-divider shape-divider-bottom" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#FFF" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
        </svg>
    </div>
</section>