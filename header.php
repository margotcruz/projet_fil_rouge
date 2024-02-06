<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="asset/header.scss" />
    <link rel="stylesheet" href="asset/footer.scss" />
    <link rel="stylesheet" href="asset/body.scss" />
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check-circle-fill" viewBox="0 0 16 16">
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
        />
      </symbol>
      <symbol id="info-fill" viewBox="0 0 16 16">
        <path
          d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
        />
      </symbol>
      <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
        <path
          d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
        />
      </symbol>
    </svg>
    <title>Accueil</title>
  </head>

  <header>
    <nav class="navbar">
      <div
        class="navbar navbar-expand-md bg-body-tertiary bg-dark d-flex p-0 row"
        data-bs-theme="dark"
      >
        <div class="container-fluid nav-bar-custom">
          <img
            src="img/Logo/logo_transparent.png"
            alt="LOGO"
            class="col-2 d-none d-md-flex"
          />
          <img
            src="img/Logo/logo_transparent.png"
            alt="LOGO"
            class="col-4 d-md-none"
          />
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- DESTOCK -->
          <div
            class="collapse navbar-collapse justify-content-around"
            id="navbarTogglerDemo01"
          >
            <ul class="navbar-nav d-none d-md-flex">
              <li class="nav-item m-4 d-flex justify-content-center">
                <a
                  class="nav-link link-active"
                  aria-current="page"
                  href="index.php"
                  >ACCUEIL</a
                >
              </li>
              <li class="nav-item m-4 d-flex justify-content-center">
                <a class="nav-link" href="categorie.php">CATEGORIE</a>
              </li>
              <li class="nav-item m-4 d-flex justify-content-center">
                <a class="nav-link" href="plats.php">PLATS</a>
              </li>
              <li class="nav-item m-4 d-flex justify-content-center">
                <a class="nav-link" href="contact.php">CONTACT</a>
              </li>
            </ul>

            <form class="d-none d-md-flex mt-0 search-container" role="search">
              <input
                class="form-control"
                type="search"
                id="searchInput"
                placeholder="Rechercher"
                aria-label="Search"
              />
              <button class="bi" id="search-button">
                <svg id="search-icon" class="search-icon" viewBox="0 0 24 24">
                  <path
                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                  />
                  <path d="M0 0h24v24H0z" fill="none" />
                </svg>
              </button>
              <ul id="searchResults"></ul>
            </form>
          </div>

          <!-- MOBILE -->
          <div
            class="collapse navbar-collapse nav_custom_mobile"
            id="navbarTogglerDemo01"
          >
            <ul class="navbar-nav me-auto mb-lg-0 d-sm-flex d-md-none">
              <li class="nav-item m-5 d-flex justify-content-center">
                <a
                  class="nav-link link-active"
                  aria-current="page"
                  href="index.php"
                  >ACCUEIL</a
                >
              </li>
              <li class="nav-item m-5 d-flex justify-content-center">
                <a class="nav-link" href="categorie.php">CATEGORIE</a>
              </li>
              <li class="nav-item m-5 d-flex justify-content-center">
                <a class="nav-link" href="plats.php">PLATS</a>
              </li>
              <li class="nav-item m-5 d-flex justify-content-center">
                <a class="nav-link" href="contact.php">CONTACT</a>
              </li>
            </ul>
            <div></div>
          </div>
        </div>
      </div>
    </nav>
    <div>
    <button
      class="btn btn-primary mx-3 position-relative"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasScrolling"
      aria-controls="offcanvasScrolling">
      Panier
      <span class="badge position-absolute top--9 end--9 badge">0</span>
    </button>

    <div
      class="offcanvas offcanvas-start"
      data-bs-scroll="true"
      data-bs-backdrop="false"
      tabindex="-1"
      id="offcanvasScrolling"
      aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header justify-content-center" id="panier">
        <h5 class="offcanvas-title mx-auto" id="offcanvasScrollingLabel">Panier</h5>
        <button
          type="button"
          class="btn-close close-custom"
          data-bs-dismiss="offcanvas"
          aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" id="liste-panier">
        <!-- Contenu du panier -->
      </div>
      <div class="d-flex justify-content-center mt-5">
        <p id="total-prix" class="p-2 btn"></p>
      </div>
      <div class="mx-auto">
        <button id="commander" class="btn p-1 mt-5 mb-3">
          Commander
        </button>
        <button id="vider-panier" class="btn mt-5 mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg>
        </button>
      </div>
    </div>
</div>
  </header>
</html>
