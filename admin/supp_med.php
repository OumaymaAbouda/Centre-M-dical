<?php
    include("config.php");
    $ID = $_GET['id'];
    $del = $connexion->prepare("DELETE FROM medecin WHERE id=$ID");
    $del->execute();
    header("location: index.html");
?>