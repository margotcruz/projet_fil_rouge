<body class="parallax-index">


        <?php require_once 'header.php' ?>

                  
                      <!-- PLAT DESTOCK -->
                      <div id="carouselExampleAutoplaying" class="carousel slide col-6 mx-auto mt-5 d-none d-md-block" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/plats/burger-angus.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>🍔 Le Délice Angus 🍔</h5>
                              <p>Un savoureux burger composé d'une généreuse portion de bœuf Angus grillée, accompagnée de fromage Gouda fondant</p>
                              <p>12.99€</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/plats/courgette-farcie.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Courgettes Farcies 🌿</h5>
                              <p>Des courgettes tendres, généreusement garnies d'un mélange savoureux de quinoa, de légumes frais et d'herbes aromatiques.</p>
                              <p>12.99€</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/plats/pizza-chorizo.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Pizza chorizo 🍕</h5>
                              <p>Notre pâte croustillante est garnie de chorizo épicé, d'olives juteuses, d'oignons rouges savoureux et de poivrons colorés, le tout recouvert d'un fromage fondant.</p>
                              <p>16.99€</p>
                            </div>
                          </div>
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
                      <?php 
                      require_once ('asset/PDO_connect.php'); 
                      ?>
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
                          <?php 
                      require_once ('asset/PDO_connect.php'); 
                      ?>
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