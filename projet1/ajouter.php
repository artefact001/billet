<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$message = ""; // Initialisez la variable de message

if (isset($_POST["button"])) {
    // Vérifier que tous les champs sont remplis
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])) {
        // Extraction des informations envoyées par la méthode POST
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];

        // Connexion à la base de données
        include_once "connexion.php";

        // Requête d'ajout
        $req = mysqli_query($con, "INSERT INTO client VALUES(NULL, '$nom', '$prenom', '$email', '$telephone', '$adresse')");

        if ($req) {
            // Redirection après l'ajout
            header("location: index.php");
        } else {
            $message = "Erreur lors de l'ajout du client";
        }
    } else {
        $message = "Veuillez remplir tous les champs";
    }
}

?>

<div class="form">
    <a href="index.php" class="back_btn"><img src="images/back.png">Retour</a>
    <h2>Ajouter un client</h2>
    <p class="erreur_message"><?php echo $message; ?></p>
    <form action="" method="POST">
        <label> Nom</label>
        <input type="text" name="nom">
        <label>Prénom</label>
        <input type="text" name="prenom">
        <label>Email</label>
        <input type="email" name="email">
        <label>Téléphone</label>
        <input type="tel" name="telephone">
        <label>Adresse</label>
        <input type="text" name="adresse">
        <input type="submit" value="Ajouter" name="button">
    </form>
</div>
</body>
</html>
