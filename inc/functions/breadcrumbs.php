<?php
//mejorar miga de pan en segundo y tercer nivel
function fbreadcrumbs() {
        /*echo '<ol id="migas-de-pan" class="breadcrumb d-block text-md-end" itemscope itemtype="https://schema.org/BreadcrumbList">';
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
        elseif (is_day()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Archive for '; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Archive for '; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Archive for '; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Author Archive'; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Blog Archives'; echo'</li>';}
        elseif (is_search()) {echo'<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">Search Results'; echo'</li>';}
        echo '</ol>';*/

        //$delimiter = '&raquo;';
        $delimiter = '';
  $name = 'Home'; //text for the 'Home' link
  $currentBefore = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="current active">';
  $currentAfter = '</li>';
  
  if ( !is_home() && !is_front_page() || is_paged() ) {
  
    echo '<ol id="migas-de-pan" class="breadcrumb d-block text-md-end" itemscope itemtype="https://schema.org/BreadcrumbList">';
  
    global $post;
    $home = get_bloginfo('url');
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="' . $home . '">' . $name . '</a></li> ' . $delimiter . ' ';
  
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $currentBefore . 'Archive by category &#39;';
      single_cat_title();
      echo '&#39;' . $currentAfter;
  
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('d') . $currentAfter;
  
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('F') . $currentAfter;
  
    } elseif ( is_year() ) {
      echo $currentBefore . get_the_time('Y') . $currentAfter;
  
    } elseif ( is_single() && !is_attachment() ) {
      $cat = get_the_category();
     
      if (!empty($cat)){
        $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $currentBefore;
        the_title();
        echo $currentAfter;
      }else{
        $enlace = post_permalink($post->ID);       
       
        $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
        // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
        $menuID = $menuLocations['primary']; // Get the *primary* menu ID
        $primaryNav = wp_get_nav_menu_items($menuID); 
        $custom_post_type = get_post_type();

        foreach ( $primaryNav as $navItem ) {
          if (($navItem->object== $custom_post_type ) &&  $navItem->url==$enlace){
            echo '<li> '.$navItem->type_label.' </li>';
          }
      }
        echo $currentBefore;
        the_title();
        echo $currentAfter;

      }
  
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;
  
    } elseif ( is_page() && !$post->post_parent ) {
      echo $currentBefore;
      the_title();
      echo $currentAfter;
  
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        //$breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $breadcrumbs[] = '<li>' . get_the_title($page->ID) . '</li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;
  
    } elseif ( is_search() ) {
      echo $currentBefore . 'Search results for &#39;' . get_search_query() . '&#39;' . $currentAfter;
  
    } elseif ( is_tag() ) {
      echo $currentBefore . 'Posts tagged &#39;';
      single_tag_title();
      echo '&#39;' . $currentAfter;
  
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $currentBefore . 'Articles posted by ' . $userdata->display_name . $currentAfter;
  
    } elseif ( is_404() ) {
      echo $currentBefore . 'Error 404' . $currentAfter;
    }
  
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
  
    echo '</ul>';
  
  }

        
}