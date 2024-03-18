<?php
// Inclure la page de connexion
include_once "connexion.php";

// Vérifier si l'ID de la réservation est défini dans l'URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // Récupérer les informations sur la réservation de billet
    $req = mysqli_query($con, "SELECT * FROM billet WHERE id_billet= $id"); 
    $row_billet = mysqli_fetch_assoc($req);

    // Vérifier si la réservation de billet existe
    if ($row_billet) {
        // Récupérer les informations sur le client ayant effectué la réservation
        // $id = $row_billet['id'];
        $req_client = mysqli_query($con, "SELECT * FROM client WHERE id = $id"); 
        $row_client = mysqli_fetch_assoc($req_client);

        // Vérifier si le formulaire de modification a été soumis
        if (isset($_POST["button"])) {
            // Vos actions de modification ici
            // ...
            // Après la modification, vous pouvez afficher un message de confirmation ou rediriger l'utilisateur
        }
    } else {
        // Afficher un message si la réservation de billet n'existe pas
        echo "Aucune réservation de billet trouvée avec l'ID spécifié.";
    }
} else {
    // Afficher un message si aucun ID de réservation n'est spécifié dans l'URL
    echo "Aucun ID de réservation spécifié.";
}

