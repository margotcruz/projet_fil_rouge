$(document).ready(function () {
  var panierItems = [];
  var nombreArticles = 0; 
  

  function addToPanier(id, libelle, prixText, image) {
      var prixMatch = prixText.match(/(\d+\.\d{1,2}|\d+)/);
      var prix = prixMatch ? parseFloat(prixMatch[0]) : 0;

      console.log("ID:", id);
      console.log("Libellé:", libelle);
      console.log("Prix:", prix);

      // Vérifier si l'article est déjà dans le panier
      var existingItem = panierItems.find(item => item.id === id);
      if (existingItem) {
          existingItem.quantite++; // Incrémenter la quantité de l'article existant
      } else {
          panierItems.push({ id: id, libelle: libelle, prix: prix, image: image, quantite: 1 });
          nombreArticles++; // Incrémenter le nombre d'articles uniques dans le panier
      }

      updatePanier();
      sessionStorage.setItem('panierItems', JSON.stringify(panierItems));
      updateBadge();
      updateTotalPrix(); // Mettre à jour le total du prix à chaque ajout
  }

  function updatePanier() {
      console.log("Mise à jour du panier");
      var listePanier = $("#liste-panier");
      listePanier.empty();

      $.each(panierItems, function (index, item) {
        var listItem = `
            <ul class="list-group list-group-flush mb-2"> <!-- Utilisation d'une liste non ordonnée -->
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">${item.libelle}</div>
                        <p class="d-flex justify-content-center">${item.prix}€</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-secondary btn-decrement" data-id="${item.id}">-</button>
                        <span class="mx-2">${item.quantite}</span>
                        <button class="btn btn-sm btn-secondary btn-increment" data-id="${item.id}">+</button>
                        <button class="row btn-supprimer btn btn-danger btn-sm ms-2" data-id="${item.id}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>
                    </div>
                </li>
            </ul>`;
        listePanier.append(listItem);
    });
    
  }

  function updateBadge() {
      $(".badge").text(nombreArticles);
      localStorage.setItem('nombreArticles', nombreArticles); // Stocker le nombre d'articles dans le panier dans le localStorage
  }

  function updateTotalPrix() {
      var total = 0;
      panierItems.forEach(function(item) {
          total += item.prix * item.quantite;
      });
      $("#total-prix").text("Total : "+total.toFixed(2) + "€");
      console.log(total);
  }

  // Gestionnaire d'événements pour l'ajout au panier
  $(document).on("click", ".ajouter-au-panier", function () {
      var article = $(this).closest('.affichage_Article');
      var id = $(this).data("id");
      var libelle = article.find("h4").text();
      var prix = article.find("p:last").text().split(" ")[0];
      addToPanier(id, libelle, prix);
  });

  // Gestionnaire d'événements pour la suppression d'un article du panier
  $(document).on("click", ".btn-supprimer", function () {
      var id = $(this).data("id");
      supprimerDuPanier(id);
  });

  // Fonction pour supprimer un article du panier
  function supprimerDuPanier(id) {
      var articleIndex = panierItems.findIndex(item => item.id === id);
      if (articleIndex !== -1) {
          panierItems.splice(articleIndex, 1);
          nombreArticles--;
          updatePanier();
          updateBadge();
          sessionStorage.setItem('panierItems', JSON.stringify(panierItems));
          updateTotalPrix(); // Mettre à jour le total du prix après suppression
      }
  }

  // Gestionnaire d'événements pour l'incrémentation de la quantité
  $(document).on("click", ".btn-increment", function () {
      var id = $(this).data("id");
      incrementerQuantite(id);
  });
  
  // Fonction pour incrémenter la quantité d'un article
  function incrementerQuantite(id) {
    var article = panierItems.find(item => item.id === id);
    if (article) {
      article.quantite++;
          updatePanier();
          sessionStorage.setItem('panierItems', JSON.stringify(panierItems));
          updateTotalPrix(); // Mettre à jour le total du prix après incrémentation
      }
  }
  
  // Gestionnaire d'événements pour la décrémentation de la quantité
  $(document).on("click", ".btn-decrement", function () {
    var id = $(this).data("id");
    decrementerQuantite(id);
  });
  
  // Fonction pour décrémenter la quantité d'un article
  function decrementerQuantite(id) {
      var article = panierItems.find(item => item.id === id);
      if (article && article.quantite > 1) {
        article.quantite--;
        updatePanier();
        sessionStorage.setItem('panierItems', JSON.stringify(panierItems));
        updateTotalPrix(); // Mettre à jour le total du prix après décrémentation
      }
    }

  // Initialiser le panier à partir des données stockées en session
  var storedPanierItems = sessionStorage.getItem('panierItems');
  if (storedPanierItems) {
      panierItems = JSON.parse(storedPanierItems);
      nombreArticles = panierItems.length;
      updatePanier();
      updateTotalPrix(); // Mettre à jour le total du prix au chargement de la page
  }

  // Récupérer le nombre d'articles dans le panier depuis le localStorage
  var storedNombreArticles = localStorage.getItem('nombreArticles');
  if (storedNombreArticles) {
      nombreArticles = parseInt(storedNombreArticles);
      updateBadge(); // Mettre à jour le badge avec le nombre d'articles récupéré
  }

  // Gestionnaire d'événements pour vider le panier
  $(document).on("click", "#vider-panier", function () {
      panierItems = [];
      nombreArticles = 0;
      updatePanier();
      updateBadge();
      sessionStorage.removeItem('panierItems');
      localStorage.removeItem('nombreArticles'); // Supprimer le nombre d'articles du localStorage
      updateTotalPrix(); // Mettre à jour le total du prix après vidage du panier
    

  });
 
  

});
