$(document).ready(function () {
    console.log("Le document est prêt!");

    function validateField(fieldName, pattern, errorMessage) {
        $(`#${fieldName}`)
            .val($.trim($(`#${fieldName}`).val()))
            .each(function () {
                if (!pattern.test($(this).val())) {
                    isFormValid = false;
                    console.log(`${fieldName} invalide`);
                    $(this).next(".text-danger").text(errorMessage);
                }
            });
    }

    $("#submitBtn").on("click", function () {
        $(".text-danger").empty();
        let isFormValid = true; 

        // Modèles pour les champs du formulaire
        const namePattern = /^[a-zA-ZàâäéèêëïîöôüùûçÀÂÄÉÈÊËÏÎÖÔÜÙÛÇ]{2,30}$/;
        const phonePattern = /^\d{10}$/;
        const emailPattern = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
        const demandeValue = $.trim($("#demande").val());

        // Valider les champs du formulaire
        validateField("nom", namePattern, "*Veuillez entrer un nom valide.");
        validateField("prenom", namePattern, "*Veuillez entrer un prénom valide.");
        validateField("telephone", phonePattern, "*Veuillez entrer un numéro de téléphone valide.");
        validateField("email", emailPattern, "*Veuillez entrer un email valide.");

        $("#demande").val(demandeValue);
        if (demandeValue === "") {
            isFormValid = false;
            console.log("Champ demande vide");
            $("#demande").next(".text-danger").text("*Le champ demande ne peut pas être vide.");
        } else if (demandeValue.length < 15) {
            isFormValid = false;
            console.log("Demande trop courte");
            $("#demande").next(".text-danger").text("*Veuillez entrer une demande d'au moins 15 caractères.");
        }

        if (isFormValid) {
            console.log("Le formulaire est valide !");
            const formData = {
                nom: $("#nom").val(),
                prenom: $("#prenom").val(),
                telephone: $("#telephone").val(),
                email: $("#email").val(),
                demande: $("#demande").val(),
            };


            $.ajax({
                type: "POST",
                url: "formulaire_contact.php",
                data: formData,
                success: function (response) {
                    console.log("Réponse du serveur:", response);
                    const successAlert = `
                    <div class="alert alert-success p-0 d-flex mt-3 align-items-center">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success">
                        <use xlink:href="#check-circle-fill"/>
                    </svg>
                    <div class="alert_txt">
                                ${response}
                            </div>
                        </div>`;
                    $("h2").append(successAlert);},
                error: function (xhr, status, error) {
                    console.error("Erreur lors de l'envoi du formulaire:", status, error);
                }
            });
        }
    });

    // Ajouter une gestionnaire de soumission pour le formulaire
    $("#contactForm").on("submit", function (e) {
        e.preventDefault();
    });
});
