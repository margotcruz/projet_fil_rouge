<?php

require_once('POO/POO_categorie.php');
require_once('POO/POO_plat.php');
require_once('POO/POO_entree.php');
require_once('POO/POO_dessert.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

function connect_database() {
    $servername = "localhost";
    $username = "admin";
    $password = "Afpa1234";
    $dbname = "Projet_fil_rouge";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connecté avec succès à la base de données";

        return $conn;

    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
}


$conn = connect_database();

                                                // Categories
$affichageCategorie = $conn->prepare("SELECT * 
                                        FROM categorie 
                                        LIMIT 6; ");
$affichageCategorie->execute();
$categories = $affichageCategorie->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "categorie");


$affichageTouteCategorie = $conn->prepare("SELECT * 
                                            FROM categorie");
$affichageTouteCategorie->execute();
$TouteCategories = $affichageTouteCategorie->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "categorie");



                                                // Plats

$affichagePlatsCarousel = $conn->prepare("SELECT plat.libelle, plat.image, plat.description, plat.prix, SUM(commande.total) AS total
                                            FROM commande
                                            JOIN plat ON commande.id_plat = plat.id
                                            GROUP BY plat.libelle, plat.image, plat.description, plat.prix
                                            ORDER BY total DESC
                                            LIMIT 3;");
    

$affichagePlatsCarousel->execute();
$PlatCarousel = $affichagePlatsCarousel->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "plat");

//

$affichagePlatVedette = $conn->prepare("SELECT plat.libelle, plat.image, plat.description, plat.prix, SUM(commande.total) AS total
                                        FROM commande
                                        JOIN plat ON commande.id_plat = plat.id
                                        GROUP BY plat.libelle, plat.image, plat.description, plat.prix
                                        ORDER BY total DESC
                                        LIMIT 3;");
$affichagePlatVedette->execute();
$PlatVedette = $affichagePlatVedette->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "plat");

//

$affichageToutsLesPlats = $conn->prepare("SELECT plat.libelle, plat.image, plat.description, plat.prix
                                FROM plat");
$affichageToutsLesPlats->execute();
$ToutsLesPlats = $affichageToutsLesPlats->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "plat");


//
if (isset($_GET["categorie_id"])) {
    $affichagePlatsCategories = $conn->prepare("SELECT *
                                                FROM plat
                                                JOIN categorie ON categorie.id = plat.id_categorie
                                                WHERE categorie.id = ?");
    $affichagePlatsCategories->execute(array($_GET["categorie_id"]));
    $PlatsParCategories = $affichagePlatsCategories->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "plat");
} else {
    echo "L'identifiant de catégorie n'est pas spécifié.";
}
if (isset($_GET["categorie_id"])) {
    $affichagePlatsVedetteCategories = $conn->prepare("SELECT plat.libelle, plat.image, plat.description, plat.prix, SUM(commande.total) AS total
                                                        FROM commande
                                                        JOIN plat ON commande.id_plat = plat.id
                                                        JOIN categorie ON categorie.id = plat.id_categorie
                                                        WHERE categorie.id = ?
                                                        GROUP BY plat.libelle, plat.image, plat.description, plat.prix
                                                        ORDER BY total DESC
                                                        LIMIT 3");
    $affichagePlatsVedetteCategories->execute(array($_GET["categorie_id"]));
    $PlatsVedetteCategories = $affichagePlatsVedetteCategories->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "plat");
} else {
    echo "L'identifiant de catégorie n'est pas spécifié.";
}


 

                                                        // Entrées
$affichageEntreeVedette = $conn->prepare("SELECT entree.libelle, entree.image, entree.description, entree.prix, SUM(commande.total) AS total
                                                        FROM commande
                                                        JOIN entree ON commande.id_entree = entree.id
                                                        GROUP BY entree.libelle, entree.image, entree.description, entree.prix
                                                        ORDER BY total DESC
                                                        LIMIT 3;");
$affichageEntreeVedette->execute();
$EntreeVedette = $affichageEntreeVedette->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "entree");


$affichageToutesLesEntrees = $conn->prepare("SELECT entree.libelle, entree.image, entree.description, entree.prix
                                FROM entree");
$affichageToutesLesEntrees->execute();
$ToutesLesEntrees = $affichageToutesLesEntrees->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "entree");




                                                        //Desserts
$affichageDessertVedette = $conn->prepare("SELECT dessert.libelle, dessert.image, dessert.description, dessert.prix, SUM(commande.total) AS total
                                          FROM commande
                                          JOIN dessert ON commande.id_dessert = dessert.id
                                          GROUP BY dessert.libelle, dessert.image, dessert.description, dessert.prix
                                          ORDER BY total DESC
                                          LIMIT 3;");
$affichageDessertVedette->execute();
$DessertVedette = $affichageDessertVedette->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "dessert");



$affichageToutsLesDesserts = $conn->prepare("SELECT dessert.libelle, dessert.image, dessert.description, dessert.prix
                                FROM dessert");
$affichageToutsLesDesserts->execute();
$ToutsLesDessert = $affichageToutsLesDesserts->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "dessert");
?>