<?php
// Connexion a la base de donnée
include_once "connexion.php";
// recuperation de l'id dans le lien 
$id=$_GET["id"];
// requette de suppression 
$req = mysqli_query ($con,"DELETE FROM client WHERE id = $id");
$req = mysqli_query ($con,"DELETE FROM billet WHERE id = $id");
// redirection vers la page index.php 
header("location:index.php");