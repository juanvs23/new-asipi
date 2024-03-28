<?php
add_action( 'add_meta_boxes', 'create_metabox' );


function create_metabox () {

	// Function to create the meta box: oaf-metabox1 -- en posts, normal y high.
	add_meta_box( 'metabox1', 'Slider Home', 'create_metabox_function', 'post', 'normal', 'high' );

}

// Function that prints out the HTML for the edit screen section.
function create_metabox_function(){

	echo 'Mi nuevo Meta Box';
}