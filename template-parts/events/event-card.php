
<div class="evento card bg-color-light box-shadow-1 box-shadow-1-hover">
<?php
$event = get_query_var('event');
$event_ID = $event->ID;
$event_title = $event->post_title;
$event_content = wp_strip_all_tags ($event->post_content);
$event_short_content = newasipi_trim_content($event_content, 90);
$event_link = get_the_permalink($event_ID);
$feature_image = wp_get_attachment_image_src( get_post_thumbnail_id( $event_ID  ), 'full' )[0];
$get_month = tribe_get_start_date($event,true,'M');
$get_day = tribe_get_start_date($event,true,'d');
?>
                            <article class="">
                                <span class="thumb-info-wrapper">
                                    <div class="date fecha-evento">
                                    <span class="day font-weight-extra-bold"><?php echo $get_day;?></span>
                                    <span class="month text-4 textt-uppercase"><?php echo $get_month;?></span>
                                    </div>
                                    <a href="<?php echo $event_link;?>">
                                    <img src="<?php echo $feature_image;?>" alt="<?php echo $event_title; ?>" class="img-fluid" style="aspect-ratio: 16/6;object-fit: cover" />
                                    </a>
                                </span>
                                <span class="thumb-info-caption">
                                    <span class="thumb-info-caption-text">
                                    <h4 class="mb-2">
                                        <a class="text-dark" href="<?php echo $event_link;?>"><?php echo $event_title; ?></a>
                                    </h4>
                                    <p class="mb-0 pe-4 text-4"><a class="text-dark" href="<?php echo $event_link;?>"><?php echo $event_short_content;?></a> </p>
                                    </span>
                                </span>
                            </article>
                        </div>