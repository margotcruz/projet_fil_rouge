<body class="parallax-index">


        <?php require_once 'header.php' ?>
                         <?php 
                         require('asset/PDO_connect.php');
                         ?>

                  
                      <!-- PLAT DESTOCK -->
                      <div id="carouselExampleAutoplaying" class="carousel slide col-6 mx-auto mt-5 d-none d-md-block" data-bs-ride="carousel">
                        <div class="carousel-inner">
                              <?php foreach ($PlatCarousel as $carousel) {
                                $carousel->affichage_plats_carousel();
                              }
                              ?>

                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      </div>
                      <!-- Section des catégories destock-->
                      
                          <div class="container card-custom d-none d-md-flex">
                              <div class=" row categories-page1 card_destock">
                              <?php

                              
                              foreach ($categories as $cat) {
                                    $cat->affichage_categorie_destock();
                              }
                              

                             ?>
                              </div>
                          </div>
                      
                          <!-- CATEGORIE MOBILE -->
                          
                          <div class="categorie_mobile d-sm flex d-md-none d-lg-none">
                          <?php

                              
                              foreach ($categories as $cat) {
                                    $cat->affichage_categorie_mobile();
                              }
                              

                             ?>
                          </div>
                      
                          <footer class="text-center mt-5">

</body>
                  
                  
    <?php
    require_once('footer.php');
    ?>