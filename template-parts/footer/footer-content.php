<div class="shape-divider shape-divider-bottom">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
        <path fill="#002B80" d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                  c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                  c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                  c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                  c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z" />
    </svg>
</div>
<!-- Forma Divider -->
<!-- Footer -->
<!-- Footer -->
<footer id="footer" class="position-relative bg-primary border-top-0 mt-0">
    <div class="container">
        <div class="pt-5 row align-items-end">
            <div class="order-2 mt-5 text-center col-lg-4 order-md-1">
                <a href="unete-a-asipi.html"
                    class="mb-3 btn btn-rounded btn-gradient-verde text-color-light custom-btn-effect-1 custom-border-radius-1 d-inline-flex align-items-center font-weight-semibold text-3-5 btn-px-5 btn-py-3 btn-mb-5 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-hash="" data-hash-offset="0" data-hash-offset-lg="32" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="300" data-appear-animation-duration="1.7s"
                    style="animation-duration: 1.7s; animation-delay: 300ms;">
                    Únete a ASIPI
                </a>
                <a href="#"
                    class="mx-5 d-inline-flex align-items-center text-decoration-none text-color-light text-color-hover-primary font-weight-semibold text-3">Política
                    de Privacidad</a>
            </div>
            <div class="order-1 text-center col-lg-4 order-md-2">
                <a href="<?php echo home_url();?>" class="text-decoration-none">
                    <img src="<?php 
                    // Configura la imagen footer
                    echo get_theme_mod( 'image_footer_setting',NEWASIPI_URL.'/assets/images/asipi-logo-footer.png'); 
                    
                    ?>" class="img-fluid" width="100" align>
                </a>
            </div>
            <div class="order-3 mt-5 text-center col-lg-4">
                <ul class="social-icons social-icons-big custom-social-icons-style-1">
                    <?php 
                    $youtube =  get_theme_mod( 'youtube_setting','https://www.youtube.com/channel/UCXxMfBUBzOZ7AhFM1vQQY5Q'); 
                    $facebook =  get_theme_mod( 'facebook_setting','https://www.facebook.com/ASIPI01');
                    $twitter =  get_theme_mod( 'twitter_setting','https://twitter.com/ASIPI_');
                    $linkedin =  get_theme_mod( 'linkedin_setting','https://www.linkedin.com/company/asociaci-n-interamericana-de-la-propiedad-intelectual-asipi-/');
                    $instagram =  get_theme_mod( 'instagram_setting','https://www.instagram.com/asipi._/');
                    ?>
                    <?php if($youtube !=""):?>
                    <li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCXxMfBUBzOZ7AhFM1vQQY5Q"
                            target="_blank" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if($facebook !=""):?>
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/ASIPI01/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if($twitter !=""):?>
                    <li class="social-icons-twitter"><a href="https://twitter.com/ASIPI_" target="_blank"
                            title="Twitter">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if($linkedin !=""):?>
                    <li class="social-icons-linkedin">
                        <a href="https://www.linkedin.com/company/asociaci-n-interamericana-de-la-propiedad-intelectual-asipi-/"
                            target="_blank" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if($instagram !=""):?>
                    <li class="social-icons-instagram"><a href="https://www.instagram.com/asipi._/" target="_blank"
                            title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-transparent footer-copyright">
        <div class="container">
            <hr class="bg-color-light opacity-1">
            <div class="row">
                <div class="py-0 mb-4 col">
                    <p class="mb-0 text-center text-color-light text-3 text-color-grey"> <?php 
                    // Configura la imagen footer
                    echo get_theme_mod( 'text_footer_setting','ASIPI 2023. Derechos Reservados. Marca Registrada.'); 
                    
                    ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>