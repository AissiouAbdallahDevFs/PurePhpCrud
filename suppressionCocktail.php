<?php

// ----  Chargement des fichiers de fonctions (librairie)
include 'lib/database.php';
include 'models/cocktail.php';


// Est-ce que l'id est bien fourni dans l'URL ?
if(array_key_exists('id', $_GET) == true)
{
    // OUI, suppression du cocktail spécifié par l'id
    supprimerCocktail($_GET['id']);
}

// Redirection vers le back-office
header('Location: backOffice.php');