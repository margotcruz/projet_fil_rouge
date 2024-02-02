<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $demande = isset($_POST['demande']) ? $_POST['demande'] : '';

    // Créer un nom de fichier unique basé sur la date et l'heure
    $filename = __DIR__ . '/' . date('Y-m-d-H-i-s') . '.txt';

    // Créer le contenu du fichier
    $fileContent = "Nom : $nom\nPrénom : $prenom\nTéléphone : $telephone\nEmail : $email\nDemande : $demande";

    // Enregistrez les données dans le fichier
    file_put_contents($filename, $fileContent);

    // Envoyer une réponse au client (peut être utilisé pour le débogage)
    echo 'Nous vous remercions de nous avoir contactés !';
}

?>


