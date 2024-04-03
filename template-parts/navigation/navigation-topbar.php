<nav class="header-nav-top">
    <ul class="nav nav-pills">
        <li class="nav-item nav-item-anim-icon d-sm-block">
            <a class="nav-link text-3 text-color-dark" href="#"><i class="fas fa-angle-right"></i> Iniciar Sesión</a>
        </li>
        <li class="nav-item dropdown nav-item-left-border d-sm-block nav-item-left-border-remove nav-item-left-border-sm-show">

            <a class="nav-link text-3 text-color-dark" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo do_shortcode("[:es]Español[:en]English[:pb]Português[:]");?>
                <i class="fas fa-angle-down"></i>
            </a>
            <?php echo get_template_part('template-parts/navigation/navigation-language');?>
        </li>
    </ul>
</nav>