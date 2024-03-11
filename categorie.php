<body class="parallax-index">


    <?php
    require_once('header.php')
    ?>

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
          </div>
      
          <footer class="text-center">
     <!-- BOUTON DESTOCK -->
<div class="d-none d-md-flex d-lg-flex justify-content-around ">
  <span class="">
      <button class="btn_P p-0 " disabled="disabled">
          <a href="#">
              <img src="img/Logo/prev.png" width="80" height="80" class="mt-3 btn-next-custom">
          </a>
      </button>
   <button class="btn_N p-0">
      <a href="#">
          <img src="img/Logo/next.png" width="80" height="80" >
      </a>
  </button>
  </span>
</div>

<!-- BOUTON MOBILE -->
<div class="d-sm-flex d-md-none d-lg-none">
  <span class="d-flex justify-content-around">
      <button class="btn_P mt-2" disabled="disabled">
          <a href="#">
              <img src="img/Logo/prev.png" width="50" height="50" >
          </a>
      </button>
   <button class="btn_N">
      <a href="categorie2.html">
          <img src="img/Logo/next.png" width="50" height="50" >
      </a>
  </button>
  </span>
</div>

</body>   
<?php
require_once('footer.php')
?>