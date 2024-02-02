<body class="parallax-formulaire">
    <?php require_once('header.php') ?>

    <!-- Section du formulaire -->
    <div class="container form_custom mx-auto">
        <div class="container">
            <h2 class="mb-5">Contactez-nous</h2>
            <form class="Formulaire d-flex row" id="contactForm" method="post" action="/formulaire_contact.php">

                <div class="mb-3 d-md-flex col-12 mb-5">
                    <div class="mx-2 col-sm-11 col-md-6">
                        <label for="nom" class="form-label">Nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                        <div class="text-danger"></div>
                    </div>

                    <div class="mx-2 col-sm-11 col-md-6">
                        <label for="prenom" class="form-label">Prénom:</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                        <div class="text-danger"></div>
                    </div>
                </div>

                <div class="mb-3 d-md-flex mb-3 col-12">
                    <div class="mx-2 col-sm-11 col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="text-danger"></div>
                    </div>

                    <div class="mx-2 col-sm-11 col-md-6">
                        <label for="telephone" class="form-label">Téléphone:</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                        <div class="text-danger"></div>
                    </div>
                </div>

                <div class="mb-3 d-md-flex mb-3 mx-auto col-sm-11 col-md-6">
                    <label for="demande" class="form-label mx-3">Demande:</label>
                    <textarea class="form-control" id="demande" name="demande" rows="3" required></textarea>
                    <div class="text-danger"></div>
                </div>

                <div class="mt-3 d-flex justify-content-end">
                    <button type="button" class="btn" id="submitBtn">Envoyer</button>
                    
                </div>

            </form>
        </div>
    </div>

    <?php require_once('footer.php') ?>
</body>
