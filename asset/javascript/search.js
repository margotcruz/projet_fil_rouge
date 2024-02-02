$(document).ready(function () {
    // Charger le fichier JSON
    $.getJSON("asset/menu.json", function (data) {
        var searchData = [];

        var id_categorie = getParameterByName("categorie");

        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
              results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return "";
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        // Ajouter les libellés et les images des catégories, des plats, des entrées, et des desserts

        data.categorie_mobile.forEach(function (categorie) {
            searchData.push({ type: 'categorie', id_categorie: categorie.id_categorie, libelle: categorie.libelle, image: categorie.image });
        });

        data.plat.forEach(function (plat) {
            searchData.push({ type: 'plat', id_categorie: plat.id_categorie, libelle: plat.libelle, image: plat.image });
        });

        data.entree.forEach(function (entree) {
            searchData.push({ type: 'entree', id_categorie: entree.id_categorie, libelle: entree.libelle, image: entree.image });
        });

        data.dessert.forEach(function (dessert) {
            searchData.push({ type: 'dessert', id_categorie: dessert.id_categorie, libelle: dessert.libelle, image: dessert.image });
        });

        // Gérer la saisie dans la barre de recherche
        $("#searchInput").on("input", function () {
            var userInput = $(this).val().toLowerCase();
            var results = [];

            // Filtrer les résultats du JSON en fonction de la saisie utilisateur
            if (userInput.length > 0) {
                results = searchData.filter(function (item) {
                    return item.libelle.toLowerCase().includes(userInput);
                });
            }

            // Afficher les résultats dans la liste déroulante
            displayResults(results);
        });

        // Fonction pour afficher les résultats dans la liste déroulante
        function displayResults(results) {
            var resultList = $("#searchResults");
            resultList.empty();

            if (results.length > 0) {
                for (var i = 0; i < results.length; i++) {
                    var listItem = $("<li data-id='" + results[i].id_categorie + "' data-type='" + results[i].type + "'>" + 
                                      "<img src='" + results[i].image + "' alt='" + results[i].libelle + "' class='search-image'>" +
                                      results[i].libelle + "</li>");

                    // Ajouter un gestionnaire d'événements pour le clic
                    listItem.click(function () {
                        var selectedCategoryId = $(this).data("id");
                        var selectedCategoryType = $(this).data("type");

                        // Rediriger vers la page correspondante en fonction de l'identifiant de catégorie et du type
                        window.location.href = "plat-par-categorie.php?type=" + selectedCategoryType + "&categorie=" + selectedCategoryId;
                    });

                    resultList.append(listItem);
                }
                resultList.show();
            } else {
                resultList.hide();
            }
        }
    });
});

