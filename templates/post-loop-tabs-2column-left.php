<div class="su-posts su-posts-teaser-loop">
	<?php
		$cont = 0;
		$fund = 0;
		// Posts are found
		if ( $posts->have_posts() ) {
			$funds = $posts->posts;
                
                //Jose Barreda 9037
                foreach ($funds as $post) {
                    	
					?>
					<div id="su-post-<?php echo $post->ID; ?>" class="column1">
						<?php $image = "https://dev.asipi.org/wp-content/uploads/2019/03/default-avatar1-150x150.jpg"; ?>
						<?php if ( get_post_thumbnail_id( $post->ID ) ) : ?>		
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
						<?php endif; ?>
						<img class="img_left1" style="float: left; width: 80px !important; height: 80px !important; border-radius: 40px !important;" src="<?php echo $image; ?>" />
						<?php /*the_content();*/ echo $post->post_content;?>					
					</div>
					<?php
					
                }

			
			
			
			
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'shortcodes-ultimate' ) . '</h4>';
		}
	?>
</div>