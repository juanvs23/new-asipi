<?php
//mejorar miga de pan en segundo y tercer nivel
function fbreadcrumbs() {
                echo '<ol id="migas-de-pan" class="breadcrumb d-block text-md-end" itemscope itemtype="https://schema.org/BreadcrumbList">';
        if (!is_home()) {
                echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="';
                echo get_option('home');
                echo '">';
                echo 'Inicio';
                echo "</a></li>";
                if (is_category() || is_single()) {
                        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
                        the_category(' </li><li> ');
                        if (is_single()) {
                                echo '</li><li class="active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
                                echo get_the_title();
                                echo '</li>';
                        }
                } elseif (is_page()) {
                        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">';
                        echo the_title();
                        echo '</li>';
                }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Archive for '; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Archive for '; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Archive for '; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Author Archive'; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Blog Archives'; echo'</li>';}
        elseif (is_search()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Search Results'; echo'</li>';}
        echo '</ol>';
}