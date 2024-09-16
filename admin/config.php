<?php
// Paramètres de connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=cm_steg';
$utilisateur = 'root';
$mot_de_passe = '';

// Création d'une instance de la classe PDO
$connexion = new PDO($dsn, $utilisateur, $mot_de_passe);

// Définition des attributs de la connexion PDO
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vérification de la connexion
if ($connexion) {
   // echo "Connexion à la base de données établie avec succès!";
} else {
    echo "Erreur de connexion.";
}
?>