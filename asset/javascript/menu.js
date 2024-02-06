var data;

$(document).ready(function () {
  // Chargement des données depuis le fichier JSON
  $.ajax({
    url: "asset/menu.json",
    dataType: "json",
    success: function (responseData) {
      data = responseData;
      console.log("Données chargées avec succès:", data);

      displayCategoriesDestock(data.categorie_destock);
      displayCategoriesMobile(data.categorie_mobile);

      var categoryId = getParameterByName("categorie");
      var filteredEntree;
      var filteredPlats;
      if (categoryId) {
        console.log("Catégorie sélectionnée:", categoryId);
        filteredPlats = loadPlatsOrDisplayAll(categoryId, data.plat, "plat");

        console.log("Catégorie d'entrée sélectionnée:", categoryId);
        filteredEntree = loadEntreesOrDisplayAll(
          categoryId,
          data.entree,
          "entree"
        );
        console.log(filteredEntree);
      } else {
        console.log(
          "Aucune catégorie sélectionnée. Affichage de tous les plats."
        );
        displayPlats(data.plat);
        displayEntree(data.entree);
      }

      console.log("Affichage des desserts.");
      displayDesserts(data.dessert);

      // Afficher les plats, entrées et desserts vedettes
      displayVedettePlats(filteredPlats);
      displayVedetteEntrees(filteredEntree);
      displayVedetteDesserts(data.dessert);
    },

    error: function (xhr, status, error) {
      console.error(
        "Erreur lors du chargement du fichier JSON:",
        status,
        error
      );
    },
  });

  // Fonction pour obtenir les paramètres d'URL
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  // Fonction pour charger les plats par catégorie ou afficher tous les plats
  function loadPlatsOrDisplayAll(categoryId, categoryData, categoryType) {
    console.log(
      "Chargement des " + categoryType + " de la catégorie:",
      categoryId
    );

    var itemsInCategory = categoryData.filter(
      (item) => item.id_categorie == categoryId
    );

    if (itemsInCategory.length > 0) {
      if (categoryType === "plat") {
        displayPlats(itemsInCategory);
        return itemsInCategory;
      }
    } else {
      console.error("Aucun élément trouvé pour la catégorie:", categoryId);
    }
  }

  // Fonction pour charger les entrées par catégorie ou afficher toutes les entrées
  function loadEntreesOrDisplayAll(categoryId, categoryData, categoryType) {
    console.log(
      "Chargement des " + categoryType + " de la catégorie:",
      categoryId
    );

    var itemsInCategory = categoryData.filter(
      (item) => item.id_categorie == categoryId
    );

    if (itemsInCategory.length > 0) {
      if (categoryType === "entree") {
        displayEntree(itemsInCategory);
        return itemsInCategory;
      }
    } else {
      console.error("Aucun élément trouvé pour la catégorie:", categoryId);
    }
  }
});

// Affiche les catégories sur les écrans larges
function displayCategoriesDestock(categories) {
  var categoriesContainerDestock = $(".container .row.categories-page1");
  $.each(categories, function (index, category) {
    if (
      category.id_categorie >= 0 &&
      category.id_categorie <= 5 &&
      category.active === "Yes"
    ) {
      var categoryCard = `
                <div class="col-lg-2 mb-2 col-md-4 d-none d-md-flex">
                    <div class="card">
                        <div class="container p-0">
                            <img src="${category.image}" class="card-img-top" alt="${category.libelle}">
                            <h5 class="card-title p-3">${category.libelle}</h5>
                        </div>
                        <div class="card-body mx-auto">
                            <a href="plat-par-categorie.php?categorie=${category.id_categorie}" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
            `;
      categoriesContainerDestock.append(categoryCard);
    }
  });
}

// Affiche les catégories sur les mobiles
function displayCategoriesMobile(categories) {
  var categoriesContainerMobile = $(".categorie_mobile").empty();
  $.each(categories, function (index, category) {
    if (
      category.active === "Yes" &&
      category.id_categorie >= 0 &&
      category.id_categorie <= 4
    ) {
      var categoryCard = `
                <div class=" container">
                    <a href="plat-par-categorie.php?categorie=${category.id_categorie}" class="imagine-link position-relative">
                        <img src="${category.image}" alt="" class="img-fluid mb-4 img-accueil-mobile">
                        <h4 class="image-title position-absolute">${category.libelle}</h4>
                    </a>
                </div>
            `;
      categoriesContainerMobile.append(categoryCard);
    }
  });
}

// Affiche les plats vedettes
function displayVedettePlats(vedettePlats) {
  var vedettePlatsContainer = $("#nav-vedette");
  $.each(vedettePlats, function (index, plat) {
    if (plat.vedette == "Yes") {
      var vedetteCard = `
              <div class="affichage_Article mt-5">
                  <div class=" justify-content-center">
                      <h4>${plat.libelle}</h4>
                      <img src="${plat.image}" class="col-3 mb-4" alt="${plat.libelle}" srcset="">
                      <p>${plat.description}</p>
                      <p>${plat.prix} € par portion.</p>
                      <button class="ajouter-au-panier btn btn-primary" data-id="${plat.id_plat}">Ajouter au Panier</button>
                      <div>
              </div>
          `;
      vedettePlatsContainer.append(vedetteCard);
    }
  });
}

// Affiche les entrées vedettes
function displayVedetteEntrees(vedetteEntrees) {
  var vedetteEntreesContainer = $("#nav-vedette");
  $.each(vedetteEntrees, function (index, entree) {
    if (entree.vedette == "Yes") {
      var vedetteCard = `
              <div class="affichage_Article mt-5">
                  <div class=" justify-content-center">
                      <h4>${entree.libelle}</h4>
                      <img src="${entree.image}" class="col-3 mb-4" alt="${entree.libelle}" srcset="">
                      <p>${entree.description}</p>
                      <p>${entree.prix} € par portion.</p>
                      <button class="ajouter-au-panier btn btn-primary" data-id="${entree.id_entree}">Ajouter au Panier</button>
                      <div>
              </div>
          `;
      vedetteEntreesContainer.append(vedetteCard);
    }
  });
}

// Affiche les desserts vedettes
function displayVedetteDesserts(vedettedesserts) {
  var vedetteDessertsContainer = $("#nav-vedette");
  $.each(vedettedesserts, function (index, dessert) {
    if (dessert.vedette == "Yes") {
      var vedetteCard = `
            <div class="affichage_Article mt-5">
                <div class=" justify-content-center">
                    <h4>${dessert.libelle}</h4>
                    <img src="${dessert.image}" class="col-3 mb-4" alt="${dessert.libelle}" srcset="">
                    <p>${dessert.description}</p>
                    <p>${dessert.prix} € par portion.</p>
                    <button class="ajouter-au-panier btn btn-primary" data-id="${dessert.id_dessert}">Ajouter au Panier</button>
                    <div>
            </div>`;
      vedetteDessertsContainer.append(vedetteCard);
    }
  });
}

// Affiche les plats
function displayPlats(plats) {
  var platsContainer = $("#nav-plats");
  $.each(plats, function (index, plat) {
    var platCard = `
          <div class="affichage_Article mt-5">
              <div class=" justify-content-center">
                  <h4>${plat.libelle}</h4>
                  <img src="${plat.image}" class="col-3 mb-4" alt="${plat.libelle}" srcset="">
                  <p>${plat.description}</p>
                  <p>${plat.prix} € par portion.</p>
                  <button class="ajouter-au-panier btn btn-primary" data-id="${plat.id_plat}">Ajouter au Panier</button>
                  <div>
              </div>
          </div>
      `;
    platsContainer.append(platCard);
  });
}

// Affiche les entrées destock
function displayEntree(entrees) {
  console.log(entrees);
  var entreeContainer = $("#nav-entree");
  $.each(entrees, function (index, entree) {
    var entreeCard = `
            <div class="affichage_Article mt-5">
                <div class=" justify-content-center">
                    <h4>${entree.libelle}</h4>
                    <img src="${entree.image}" class="col-3 mb-4" alt="${entree.libelle}" srcset="">
                    <p>${entree.description}</p>
                    <p>${entree.prix} € par portion.</p>
                    <button class="ajouter-au-panier btn btn-primary" data-id="${entree.id_entree}">Ajouter au Panier</button>
                </div>
            </div>
                  
        `;
    entreeContainer.append(entreeCard);
  });
}

// Affiche les desserts destock
function displayDesserts(desserts) {
  var dessertContainer = $("#nav-dessert").empty();
  $.each(desserts, function (index, dessert) {
    var dessertCard = `
            <div class="affichage_Article mt-5">
                <div class=" justify-content-center">
                    <h4>${dessert.libelle}</h4>
                    <img src="${dessert.image}" class="col-3 mb-4" alt="${dessert.libelle}" srcset="">
                    <p>${dessert.description}</p>
                    <p>${dessert.prix} € par portion.</p>
                    <button class="ajouter-au-panier btn btn-primary" data-id="${dessert.id_dessert}">Ajouter au Panier</button>
                    <div>
                        
            </div>
        `;
    dessertContainer.append(dessertCard);
  });
}

  
  