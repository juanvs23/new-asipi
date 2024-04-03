<?php ?>

<section class="pt-5 pb-0 border-0 section-height-2 section-with-shape-divider lazyloaded">

               <div class="container">
                  <div class="pb-2 mb-5 row justify-content-center align-items-end">
                     <div class="text-center col-md-4">
                     </div>
                     <div class="text-center col-md-4">
                        <h1 class="mb-2 text-color-dark font-weight-bold appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">Eventos</h1>
                     </div>
                     <div class="col-md-4 justify-content-lg-end justify-content-center" style="display: flex;">
                           <a href="#" class="mb-3 btn btn-outline btn-rounded btn-primary font-weight-bold text-2 btn-sm appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Eventos de otras asociaciones</a>
                     </div>
                  </div>
                  <div class="pb-2 mb-3 row">
                     <div class="col-md-6">
                        <h4 class="px-3 font-weight-bold text-primary">
                            Eventos Anuales
                        </h4>
                      <?php
                        echo do_shortcode('[yearly_events category="eventos-asipi"]');
                      ?>
                     </div>
                     <div class="col-md-6">
                        <h4 class="px-3 font-weight-bold text-secondary">
                        Otros eventos</h4>
                        <?php
                        echo do_shortcode('[yearly_events category="eventos-otra-asociacion" model="2"]');
                      ?>
                     </div>
                  </div>
                  <div class="pb-2 mb-3 row justify-content-center">
                     <div class="text-center col-md-9 col-lg-12">
                        <a href="eventos.html" class="btn btn-rounded btn-gradient text-color-light custom-btn-effect-1 custom-border-radius-1 d-inline-flex align-items-center font-weight-semibold text-3-5 btn-px-5 btn-py-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-hash="" data-hash-offset="0" data-hash-offset-lg="32" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="1.7s" style="animation-duration: 1.7s; animation-delay: 800ms;">
                        Ver todos los eventos
                        </a>
                     </div>
                  </div>
               </div>
            </section>