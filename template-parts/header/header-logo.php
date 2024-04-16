<div class="header-column">
    <div class="header-row">
        <div class="header-logo">
            <?php if ( has_custom_logo() ) { ?>
            <a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-lg font-extrabold uppercase">
                <img src="<?php echo get_custom_logo_url(); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" srcset="">
            </a>
            <?php } else { ?>
            <a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-lg font-extrabold uppercase">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
            <p class="text-sm font-light text-gray-600">
                <?php echo get_bloginfo( 'description' ); ?>
            </p>
            <?php } ?>
        </div>
    </div>
</div>