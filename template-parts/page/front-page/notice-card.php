<?php
$get_query_var = get_query_var('post');
$post = $get_query_var['post'];
$sub_prefix = $get_query_var['sub_prefix'];
$ID = $post->ID;
$post_title = $post->post_title;
$url_principal = network_site_url();


?>
<div class="p-4 publicacion-owl evento card bg-color-light box-shadow-1 box-shadow-1-hover">
    <div class="row">
        <div class="col-lg-5">
            <img src="<?php echo "{$url_principal}biblioteca/wp-content/uploads/sites/{$sub_prefix}/{$post->meta_value}";?>" class="rounded img-fluid" alt="Lorem Ipsum Dolor" />
        </div>
        <div class="mt-4 col-lg-7 mt-lg-0">
            <h4 class="mb-2 font-weight-bold text-3 text-primary"><?php echo $post_title; ?></h4>
                <a href="<?php echo $url_principal.'biblioteca/download/' . $post->post_name;?>" class="btn btn-outline btn-rounded btn-secondary font-weight-bold text-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Ver más</a>
        </div>
    </div>
</div>