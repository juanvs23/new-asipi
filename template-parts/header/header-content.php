<?php
?>
<!--header content-->
<div class="p-relative bottom-1">

<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
         <div class="header-body border-top-0">
           <div class="header-top">
      
             <div class="container">
               <div class="py-2 header-row">
                 <div class="header-column justify-content-start">
                   <div class="header-row">
					            <?php echo get_template_part('template-parts/navigation/navigation-topbar');?>  
                   </div>
                 </div>
                 <div class="header-column justify-content-end">
                   <div class="header-row">
                     <div class="order-1 header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-lg-2">
  										<div class="header-nav-feature header-nav-features-search d-inline-flex">
  											<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search"><i class="fas fa-search header-nav-top-icon"></i></a>
  											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
  												<form role="search" action="page-search-results.html" method="get">
  													<div class="simple-search input-group">
  														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
  														<button class="btn" type="submit" aria-label="Search">
  															<i class="fas fa-search header-nav-top-icon"></i>
  														</button>
  													</div>
  												</form>
  											</div>
  										</div>
  									</div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="container header-container">
             <div class="header-row">
                <!--Header logo-->
                <?php echo get_template_part('template-parts/header/header-logo');?>
                <!--End Header logo-->
                <!--navigation-->
                <?php echo get_template_part('template-parts/navigation/navigation-content'); ?>

             </div>
           </div>
         </div>
       </header>

