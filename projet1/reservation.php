<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver un billet de voyage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Réserver un billet de voyage</h2>
        <?php if(isset($message)) echo "<p>$message</p>"; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="type_billet">Type de billet :</label>
                <select id="type_billet" name="type_billet" required>
                    <option value="economique">Economique</option>
                    <option value="affaires">Affaires</option>
                    <option value="premiere_classe">Première classe</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lieu_depart">Lieu de départ :</label>
                <input type="text" id="lieu_depart" name="lieu_depart" required>
            </div>
            <div class="form-group">
                <label for="lieu_destination">Lieu de destination :</label>
                <input type="text" id="lieu_destination" name="lieu_destination" required>
            </div>
            <div class="form-group">
                <label for="date_depart">Date et heure de départ :</label>
                <input type="datetime-local" id="date_depart" name="date_depart" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Réserver</button>
            </div>
        </form>
    </div>
    <style>body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
select,
button {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
<?php
$message = "";

if(isset($_POST['submit'])) {
    $type_billet = $_POST['type_billet'];
    $lieu_depart = $_POST['lieu_depart'];
    $lieu_destination = $_POST['lieu_destination'];
    $date_depart = $_POST['date_depart'];

    $prix_du_billet = calculer_prix_billet($type_billet, $lieu_depart, $lieu_destination);

    // Vous devez ajouter votre logique de connexion à la base de données ici

    // Requête préparée pour l'insertion des données
    /*
    $query = "INSERT INTO `billet`(`type_de_billet`, `lieu_de_depart`, `lieu_de_destination`, `date_et_heure_de_depart`, `prix_du_billet`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssss", $type_billet, $lieu_depart, $lieu_destination, $date_depart, $prix_du_billet);

    if ($stmt->execute()) {
        // Réussite de la réservation
        $message = "Réservation effectuée avec succès!";
        // header("refresh:2;url=reservations.php"); // Redirection après 2 secondes
    } else {
        // Échec de la réservation
        $message = "Erreur lors de la réservation. Veuillez réessayer.";
    }
    $stmt->close();
    $con->close();
    */

    // Message de succès simulé pour cet exemple
    $message = "Réservation effectuée avec succès!";
}

function calculer_prix_billet($type_billet, $lieu_depart, $lieu_destination) {
    // Logique de calcul du prix du billet
    $prix = 0;
    if ($type_billet == "economique") {
        $prix = 50;
    } elseif ($type_billet == "affaires") {
        $prix = 100;
    } elseif ($type_billet == "premiere_classe") {
        $prix = 200;
    }
    return $prix;
}
?>

</body>
</html>
