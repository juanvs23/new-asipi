<?php

function fbreadcrumbs() {
                echo '<ul id="migas-de-pan" class="breadcrumb d-block text-md-end">';
        if (!is_home()) {
                echo '<li><a href="';
                echo get_option('home');
                echo '">';
                echo 'Inicio';
                echo "</a></li>";
                if (is_category() || is_single()) {
                        echo '<li>';
                        the_category(' </li><li> ');
                        if (is_single()) {
                                echo "</li><li class='active'>";
                                the_title();
                                echo '</li>';
                        }
                } elseif (is_page()) {
                        echo '<li class="active">';
                        echo the_title();
                        echo '</li>';
                }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
        elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
        echo '</ul>';
}