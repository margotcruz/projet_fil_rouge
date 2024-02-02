$(document).ready(function () {
    $("#contactForm").on("submit", function (e) {
      e.preventDefault();
  
      // Clear previous error messages
      $(".form-control").next("div.text-danger").remove();
  
      // Define patterns for form fields
      const namePattern = /^[a-zA-ZàâäéèêëïîöôüùûçÀÂÄÉÈÊËÏÎÖÔÜÙÛÇ]{2,30}$/;
      const phonePattern = /^\d{10}$/;
      const emailPattern = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
      const adresseValue = $.trim($("#adresse").val());
      let isFormValid = true;
  
      // Validate form fields
      $("#nom")
        .val($.trim($("#nom").val()))
        .each(function () {
          if (!namePattern.test($(this).val())) {
            isFormValid = false;
            $(this).after(
              '<div class="text-danger">Veuillez entrer un nom valide.</div>'
            );
          }
        });
  
      $("#prenom")
        .val($.trim($("#prenom").val()))
        .each(function () {
          if (!namePattern.test($(this).val())) {
            isFormValid = false;
            $(this).after(
              '<div class="text-danger">Veuillez entrer un prenom valide.</div>'
            );
          }
        });
  
      $("#telephone")
        .val($.trim($("#telephone").val()))
        .each(function () {
          if (!phonePattern.test($(this).val())) {
            isFormValid = false;
            $(this).after(
              '<div class="text-danger">Veuillez entrer un numéro de telephone valide.</div>'
            );
          }
        });
  
      $("#email")
        .val($.trim($("#email").val()))
        .each(function () {
          if (!emailPattern.test($(this).val())) {
            isFormValid = false;
            $(this).after(
              '<div class="text-danger">Veuillez entrer un email valide.</div>'
            );
          }
        });
  
      $("#adresse")
        .val($.trim($("#adresse").val()))
        .each(function () {
          if (adresseValue === "") {
            isFormValid = false;
            $(this).after(
              '<div class="text-danger">Le champ adresse ne peut pas être vide.</div>'
            );
          } else if (adresseValue.length < 15) {
            isFormValid = false;
            $(this).after(
              '<div class="text-danger">Veuillez entrer une adresse d\'au moins 15 caractères.</div>'
            );
          }
        });
  
      // If the form is valid, send the data to the server
      if (isFormValid) {
        // Collect form data
        const formData = {
          nom: $("#nom").val(),
          prenom: $("#prenom").val(),
          telephone: $("#telephone").val(),
          email: $("#email").val(),
          adresse: $("#adresse").val(),
        };
      }
    });
  });
  