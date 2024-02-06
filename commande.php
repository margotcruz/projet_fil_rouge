<body class="parallax-formulaire">
<?php
require_once('header.php')
?>



    

<div class="container form_custom mt-5 ">
            <p id="total-prix"></p>
        </div>
      <form class="Formulaire" id="mon_formulaire_commande" method="post" action="">
        
        <div class="mb-3 d-md-flex ">
            <label for="nom" class="form-label mx-3">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
            <label for="prenom" class="form-label mx-3">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        
        <div class="mb-3 d-md-flex">
            <label for="email" class="form-label mx-3">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <label for="telephone" class="form-label mx-3">Téléphone:</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>

        <div class="mb-3 col-6 d-md-flex mx-auto">
            <label for="adresse" class="form-label mx-3">Adresse:</label>
            <textarea class="form-control" id="adresse" name="adresse" rows="3" required></textarea>
        </div>
      
        <div class="mt-3 d-flex justify-content-end">
            <button class="btn btn-primary" id="valider-commande">Valider la Commande</button>
        </div>

        
    </form>
</div>
</div>
</body>
<?php
require_once('footer.php')
?>
