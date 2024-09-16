<?php
    include("config.php");
    $ID = $_GET['id'];
    $del = $connexion->prepare("DELETE FROM specialite WHERE id=$ID");
    $del->execute();
    header("location: index.html");
?>