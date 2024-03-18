<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de billeterie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png">Inscription</a>
     
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                <th>Reserver</th>
                <th>Statut</th>

            </tr>
            <?php   
                // Inclure la page de connexion
                include_once "connexion.php";
                // Requête pour afficher la liste des clients
                $req = mysqli_query($con,"SELECT * FROM client");
                if (mysqli_num_rows($req) == 0) {
                    // S'il n'y a pas de clients dans la base de données, afficher ce message :
                    echo "Il n'y a pas encore de clients ajoutés !";
                } else {
                    // Sinon, afficher la liste des clients
                    while($row=mysqli_fetch_assoc($req)) {
            ?>
                <tr>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['telephone']?></td>
                    <td><?=$row['adresse']?></td>
                    <!-- Mettre l'ID de chaque client dans ce lien pour la modification -->
                    <td><a href="modifier.php?id=<?=$row['id']?>"> <img src="images/pen.png"></a></td>
                    <td><a href="supprimer.php?id=<?=$row['id']?>"> <img src="images/trash.png"></a></td>
                    <td><a href="reservation.php?id=<?=$row['id']?>"> <img src="images/pen.png"></a></td>
                    <td><a href="reservations.php?id=<?=$row['id']?>"> <img src="images/pen.png"></a></td>

                </tr>
            <?php 
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>
