<?php
$event = get_query_var('event');
$event_ID = $event->ID;
$event_title = $event->post_title;
$event_content = wp_strip_all_tags($event->post_content);
$event_short_content = newasipi_trim_content($event_content, 128);
$event_link = get_the_permalink($event_ID);
$feature_image = wp_get_attachment_image_src( get_post_thumbnail_id( $event_ID  ), 'full' )[0];
$get_month = tribe_get_start_date($event,true,'M');
$get_day = tribe_get_start_date($event,true,'d');?>

                          
                              
                                 <article>
                                    <div class="row">
                                       <div class="col-auto pe-0 col-md-2">
                                          <div class="date">
                                             <span class="day font-weight-extra-bold"><?php echo $get_day ?></span>
                                             <span class="textt-uppercase month text-4"><?php echo $get_month ?></span>
                                          </div>
                                       </div>
                                       <div class="col ps-1 col-md-10">
                                          <h4 class="text-primary text-4"><a class="text-dark" href="<?php echo $event_link ?>"><?php echo $event_title ?></a></h4>
                                          <p class="mb-0 pe-4"><?php echo $event_short_content ?></p>
                                       </div>
                                    </div>
                                 </article>
                              
                           
                      