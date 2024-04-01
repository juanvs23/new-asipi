</div>
<!-- Footer -->
<footer id="footer" class="position-relative bg-primary border-top-0">
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
                    
                    ?>" class="img-fluid" width="100"
                        align>
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
                    <p class="mb-0 text-center text-color-light text-3 text-color-grey">  <?php 
                    // Configura la imagen footer
                    echo get_theme_mod( 'text_footer_setting','ASIPI 2023. Derechos Reservados. Marca Registrada.'); 
                    
                    ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>