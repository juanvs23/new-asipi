<?php
?>
<!--header content-->
<div class="p-relative bottom-1">

<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
         <div class="header-body border-top-0">
           <div class="header-top">
             <div class="container">
               <div class="header-row py-2">
                 <div class="header-column justify-content-start">
                   <div class="header-row">
                     <nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-anim-icon d-sm-block">
													<a class="nav-link text-3 text-color-dark" href="#"><i class="fas fa-angle-right"></i> Iniciar Sesión</a>
												</li>
												<li class="nav-item dropdown nav-item-left-border d-sm-block nav-item-left-border-remove nav-item-left-border-sm-show">
													<a class="nav-link text-3 text-color-dark" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Español
														<i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                          <a class="dropdown-item text-2 text-color-dark" href="#">Español</a>
														<a class="dropdown-item text-2 text-color-dark" href="#">English</a>
														<a class="dropdown-item text-2 text-color-dark" href="#">Português</a>
													</div>
												</li>
											</ul>
										</nav>
                   </div>
                 </div>
                 <div class="header-column justify-content-end">
                   <div class="header-row">
                     <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
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
           <div class="header-container container">
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

