<?php

// ----  Chargement des fichiers de fonctions (librairie)
include 'lib/database.php';
include 'models/cocktail.php';

/* Récupération de toutes les lignes d'un jeu de résultats */


$lister = lireCocktail($_GET['id']);
// ---- Code principal
// Récupération de tous les cocktails stockés en base de données


// ---- Chargement du template

// Affichage du template de la page d'accueil
include 'templates/detailsCocktail.phtml';