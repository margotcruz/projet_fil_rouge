<body class="parallax-asian">
  
  <?php
require_once('header.php')
?>
<?php require('asset/PDO_connect.php');?>

  <!-- ... Affichage des plats par categories destock ... -->


<nav id="navbar-example2" class="navbar px-3 mb-3 sticky-top">
  <a class="navbar-brand" href="#">MENU</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link " href="#scrollspyHeading1">Nos produits vedettes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading2">Entrées</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading3">Plats</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading4">Desserts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading5">Boisson</a>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1" class="affichage_Article">Nos produits vedettes</h4>
  <div class="carousel-container">
  <div class="carousel">
                              <?php foreach ($PlatVedette as $plat) {
                                $plat->affichage_plat();
                              }
                              ?>
                              <?php foreach ($EntreeVedette as $entree) {
                                $entree->affichage_entree();
                              }
                              ?>
                              <?php foreach ($DessertVedette as $dessert) {
                                $dessert->affichage_dessert();
                              }
                              ?>
</div>
  </div>

    



  
  <h4 id="scrollspyHeading2" class="affichage_Article">Entrées</h4>
  <div class="carousel-container">
  <div class="carousel">
                              <?php foreach ($ToutesLesEntrees as $entree) {
                                $entree->affichage_entree();
                              }
                              ?>
  </div>
  </div>
  
  <h4 id="scrollspyHeading3" class="affichage_Article">Plats</h4>
  <div class="carousel-container">
  <div class="carousel">
                              <?php foreach ($ToutsLesPlats as $plat) {
                                $plat->affichage_plat();
                              }
                              ?>
  </div>
  </div>

  <h4 id="scrollspyHeading4" class="affichage_Article">Dessert</h4>
  <div class="carousel-container">
  <div class="carousel">
                              <?php foreach ($ToutsLesDessert as $dessert) {
                                $dessert->affichage_dessert();
                              }
                              ?>
  </div>
  </div>


</body>
<?php
require_once('footer.php')
?>