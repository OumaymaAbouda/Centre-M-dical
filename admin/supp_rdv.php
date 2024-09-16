<?php
include("config.php");

// Vérifier si l'ID est défini dans la requête GET
if(isset($_GET['id'])) {
    $ID = $_GET['id'];

    // Préparer la requête de suppression
    $del = $connexion->prepare("DELETE FROM listerendnc WHERE id=$ID");
  

    // Exécuter la requête de suppression
    if($del->execute()) {
        // Rediriger vers la page d'accueil si la suppression réussit
        header("location: listRendC.php");
    } else {
        // Afficher un message d'erreur si la suppression échoue
        echo "Erreur lors de la suppression de l'enregistrement.";
    }
} else {
    // Afficher un message d'erreur si l'ID n'est pas défini
    echo "ID non défini.";
}
?>
