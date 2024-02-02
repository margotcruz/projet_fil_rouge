<body class="parallax-asian">


<?php
require_once('header.php')
?>

  <!-- ... Affichage des plats par categories destock ... -->
  <nav class="col-11 mx-5 Tab_custom mx-auto mb-5 ">
    <div class="nav nav-tabs " id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-vedette-tab" data-bs-toggle="tab" data-bs-target="#nav-vedette"
        type="button" role="tab" aria-controls="nav-vedette " aria-selected="true">Articles vedette</button>

      <button class="nav-link" id="nav-entree-tab" data-bs-toggle="tab" data-bs-target="#nav-entree" type="button"
        role="tab" aria-controls="nav-profile" aria-selected="false">Entrée</button>

      <button class="nav-link" id="nav-plats-tab" data-bs-toggle="tab" data-bs-target="#nav-plats" type="button"
        role="tab" aria-controls="nav-plats" aria-selected="false">Plats</button>

      <button class="nav-link" id="nav-dessert-tab" data-bs-toggle="tab" data-bs-target="#nav-dessert" type="button"
        role="tab" aria-controls="nav-dessert" aria-selected="false">Dessert</button>

      <button class="nav-link" id="nav-boisson-tab" data-bs-toggle="tab" data-bs-target="#nav-boisson" type="button"
        role="tab" aria-controls="nav-boisson" aria-selected="false">Boisson</button>

    </div>

    <div class="tab-content " id="nav-tabContent">
      <div class="tab-pane fade show active mx-4 mb-5" id="nav-vedette" role="tabpanel" aria-labelledby="nav-vedette-tab"
        tabindex="0">

        
      </div>

      <div class="tab-pane fade mb-5" id="nav-entree" role="tabpanel" aria-labelledby="nav-entree-tab" tabindex="0">

      </div>

      <div class="tab-pane fade mb-5" id="nav-plats" role="tabpanel" aria-labelledby="nav-plats-tab" tabindex="0">
        
      </div>

      <div class="tab-pane fade mb-5" id="nav-dessert" role="tabpanel" aria-labelledby="nav-dessert-tab" tabindex="0">
        
      </div>

      <div class="tab-pane fade mb-5" id="nav-boisson" role="tabpanel" aria-labelledby="nav-boisson-tab" tabindex="0">
        
      </div>
    </div>
  </nav>
</body>
<?php
require_once('footer.php')
?>