<?php
include("config.php");

if(isset($_GET['id'])) {
    $ID = $_GET['id'];

    // Sélectionner les données à partir de la table listerendnc
    $select = $connexion->prepare("SELECT * FROM listerendnc WHERE id=$ID");
    $select->execute();
    $row = $select->fetch(PDO::FETCH_ASSOC);

    // Insérer les données sélectionnées dans la table listerendc
    $insert = $connexion->prepare("INSERT INTO listerendc ( medecin, patient,age,phone, email,date, time) VALUES (:medecin,:patient,:age,:phone, :email,:date,:time)");
    $insert->bindParam(':medecin', $row['medecin']);
    $insert->bindParam(':patient', $row['patient']);
    $insert->bindParam(':age', $row['age']);
    $insert->bindParam(':phone', $row['phone']);
    $insert->bindParam(':email', $row['email']);
    $insert->bindParam(':date', $row['date']);
    $insert->bindParam(':time', $row['time']);
    
    $insert->execute();

    // Supprimer les données de la table listerendnc
    $del = $connexion->prepare("DELETE FROM listerendnc WHERE id=$ID");
    $del->execute();
    
    header("location: index.html"); // Redirection vers la page d'accueil après suppression
} else {
    echo "ID non défini.";
}
?>
