<?php
add_action( 'add_meta_boxes', 'slider_mextabox_cb' );

function slider_mextabox_cb()
{
        add_meta_box( 'my-meta-box-1', 'Slider Home', 'slider_mextabox_cb', 'home', 'normal', 'default' );
}