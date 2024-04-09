<?php 
$title_unete = get_post_meta($post->ID, '_title_unete', true);
$texto_unete = get_post_meta($post->ID, '_texto_unete', true);
$image_unete1 = get_post_meta($post->ID, '_image_unete1', true);
$image_unete2 = get_post_meta($post->ID, '_image_unete2', true);
$image_unete3 = get_post_meta($post->ID, '_image_unete3', true);
$image_unete4 = get_post_meta($post->ID, '_image_unete4', true);
$image_unete5 = get_post_meta($post->ID, '_image_unete5', true);
$titulo_boton_unete = get_post_meta($post->ID, '_titulo_boton_unete', true);
$link_boton_unete = get_post_meta($post->ID, '_link_boton_unete', true);
?>

<section class="section bg-gradient-azul section-height-3 section-with-shape-divider border-0 lazyload mt-5 mb-0" data-bg-src="img/parallax/parallax-2.jpg">
    <div class="shape-divider shape-divider-reverse-x" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#FFF" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
        </svg>
    </div>
    <div class="spacer py-5 my-5">
        <div class="container">
            <div class="row justify-content-center pb-2 mb-3">
            <div class="col-md-9 col-lg-12 text-center">
                <h1 class="text-color-light font-weight-bold line-height-6 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <?php echo esc_attr($title_unete); ?></h2>
                <p class="text-color-light lead appear-animation animated appear-animation-visible mb-5" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                <?php echo esc_attr($texto_unete); ?>
                </p>
                <div class="row my-5">
                <?php if ($image_unete1){  ?>
                    <div class="col-md" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                        <img src="<?php echo esc_attr($image_unete1); ?>" class="img-fluid mb-4" align>
                        <p class="text-color-light font-weight-bold text-4 mt-3">Integra los Comités de Trabajo, Comisiones y Programas</p>
                    </div>
                <?php }?>
                <?php if ($image_unete2){  ?>
                    <div class="col-md" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 200ms;">
                        <img src="<?php echo esc_attr($image_unete2); ?>" class="img-fluid mb-4" align>
                        <p class="text-color-light font-weight-bold text-4 mt-3">Extiende tu red de contactos a nivel internacional</p>
                    </div>
                <?php }?>
                <?php if ($image_unete3){  ?>
                    <div class="col-md" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 200ms;">
                        <img src="<?php echo esc_attr($image_unete3); ?>" class="img-fluid mb-4" align>
                        <p class="text-color-light font-weight-bold text-4 mt-3">Mantente actualizado con nuestras publicaciones, webinars, podcasts</p>
                    </div>
                <?php }?>
                <?php if ($image_unete4){  ?>
                    <div class="col-md" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 200ms;">
                        <img src="<?php echo esc_attr($image_unete4); ?>" class="img-fluid mb-4" align>
                        <p class="text-color-light font-weight-bold text-4 mt-3">Obtén una tarifa especial en eventos y cursos</p>
                    </div>
                <?php }?>
                <?php if ($image_unete5){  ?>
                    <div class="col-md" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 200ms;">
                        <img src="<?php echo esc_attr($image_unete5); ?>" class="img-fluid mb-4" align>
                        <p class="text-color-light font-weight-bold text-4 mt-3">Accede a descuentos en el programa de patrocinios</p>
                    </div>
                <?php }?>
                </div>
                <a href="<?php echo esc_attr($link_boton_unete); ?>" class="btn btn-rounded btn-gradient-verde text-color-light custom-btn-effect-1 custom-border-radius-1 d-inline-flex align-items-center font-weight-semibold text-3-5 btn-px-5 btn-py-3 btn-my-3 appear-animation" data-hash data-hash-offset="0" data-hash-offset-lg="32" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="1.7s">
                  <?php echo esc_attr($titulo_boton_unete); ?>
                </a>
            </div>
            </div>
        </div>
    </div>
    <div class="shape-divider shape-divider-bottom" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <path fill="#00953A" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
            c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
            c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
            c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
            c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z"/>
        </svg>
    </div>
</section>