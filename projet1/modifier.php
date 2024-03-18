<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
include_once "connexion.php"; // Connexion à la base de données

$message = ""; // Initialisez la variable de message

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $req = mysqli_query($con, "SELECT * FROM client WHERE id = $id"); 
    $row = mysqli_fetch_assoc($req);

    if (isset($_POST["button"])) {
        // Vérifier que tous les champs sont remplis
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])) {
            // Extraction des informations envoyées par la méthode POST
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $adresse = $_POST['adresse'];

            // Requête de modification
            $req = mysqli_query($con, "UPDATE client SET nom ='$nom', prenom ='$prenom', email ='$email', telephone ='$telephone', adresse ='$adresse' WHERE id =$id");

            if ($req) {
                // Redirection après la modification
                header("location: index.php");
            } else {
                $message = "Erreur lors de la modification du client";
            }
        } else {
            $message = "Veuillez remplir tous les champs";
        }
    }
} else {
    $message = "ID du client non spécifié";
}

?>

<div class="form">
    <a href="index.php" class="back_btn"><img src="images/back.png">Retour</a>
    <h2>Modifier le client : <?php echo $row['nom']; ?></h2>
    <p class="erreur_message"><?php echo $message; ?></p>
    <form action="" method="POST">
        <label>Nom</label>
        <input type="text" name="nom" value="<?php echo $row['nom']; ?>">
        <label>Prénom</label>
        <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <label>Téléphone</label>
        <input type="tel" name="telephone" value="<?php echo $row['telephone']; ?>">
        <label>Adresse</label>
        <input type="text" name="adresse" value="<?php echo $row['adresse']; ?>">
        <input type="submit" value="Modifier" name="button">
    </form>
</div>
</body>
</html>
