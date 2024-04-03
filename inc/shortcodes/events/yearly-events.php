<?php

add_shortcode('yearly_events', 'newasipi_yearly_events');

function newasipi_yearly_events($atts) {
 

    $atts = shortcode_atts(array(
        'limit' => 10,
        'category' => '',
        'model'=>1
        ),
         $atts);

        $args_a = array(
            'posts_per_page' => $atts['limit'],
            'post_status' => 'publish',
            'tax_query' => array(
                            array(
                                
                                'taxonomy' => 'tribe_events_cat',
                                'field' => 'slug',
                                'terms' => $atts['category'],
                            )
                        )
                    );

        $args_b = array(
            'posts_per_page' => $atts['limit'],
            'post_status' => 'publish',
        );
        $args = $atts['category'] ? $args_a : $args_b;
        $events =tribe_get_events($args);
        ob_start();
        $count = 1;
        ?>
         
            <div class="col">
                <div class="">
                    <?php 
                    if ($atts['model'] == 1) {
                        ?>
                        <div class="mb-0 owl-carousel owl-theme nav-bottom nav-bottom-align-right nav-style-1 nav-dark nav-font-size-lg eventos" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': false, 'nav': true, 'dots': false, 'margin': 20}">
                        <?php
                    }else{
                        ?>

<div class="mb-0 owl-carousel owl-theme nav-bottom nav-bottom-align-right nav-style-1 nav-dark nav-font-size-lg eventos" data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
                        <?php
                    }
                    ?>
                       <?php
                       if (count($events) > 0) {
                        foreach($events as $event){
                            set_query_var('event', $event);
                            
                            if($atts['model'] == 1){
                              echo get_template_part('template-parts/events/event-card');
                            }else{
                              echo $count % 2!= 0 ? '<div class="p-relative"><div class="evento otros card bg-color-light box-shadow-1 box-shadow-1-hover">': '<div class="evento otros card bg-color-light box-shadow-1 box-shadow-1-hover">';
                              echo get_template_part('template-parts/events/event-list');
                              echo $count % 2!= 0 ? '</div> <hr class="solid">': '</div></div>';
                              $count++;
                            }
                         }
                       }
                       wp_reset_postdata();
                       ?> 
                        
                    </div>
                </div>
            </div>
        <?php
        return ob_get_clean();
}
