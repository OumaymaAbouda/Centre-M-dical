<?php
include("config.php");

if(isset($_POST["modifier"])){
    $ID=$_POST["id"];
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    
            $update = "UPDATE admin SET name=?, email=?, password=?  WHERE  id=?" ;
             $stmt = $connexion->prepare($update);
             $stmt->execute([$name, $email, $password,$ID]);
      
    } else {
        echo 'Aucun admin ';
    }
    header('location:index.html');
?>