<?php 
// Connexion a la base de données
$con = mysqli_connect("localhost","root","","tutorial");
if(!$con){
    echo "Vous n'etes pas connecter a la base de donnée";
}

