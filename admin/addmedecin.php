<?php
include("config.php");

if(isset($_POST["ajouter"])){
    $name=$_POST["nom"]; 
    $prenom=$_POST["prenom"];
    $image=$_FILES["image"];
    $description=$_POST["description"];
    $specialite=$_POST["spécialité"];
    $mail=$_POST["mail"];
    if(isset($image)) {
        $image_location = $image["tmp_name"];
        $image_name = $image["name"];
        $image_up = "images_med/" .$image_name;

        if(move_uploaded_file($image_location, 'images_med/'.$image_name)){
            /*$insert = $connexion->prepare("INSERT INTO specialite(name,description,image) VALUES('$name','$description','$image_up')");
            $insert->execute();*/
            $insert = "INSERT INTO medecin (nom,prenom,email,specialite,description,image) VALUES (?,?,?,?,?,?)";
            $connexion->prepare($insert)->execute([$name,$prenom,$mail,$specialite, $description, $image_up]);

            // Rediriger avant d'afficher un message
            header('Location: addMedecina.php');
            exit; // Terminer l'exécution du script après la redirection
        } else {
            echo 'Error uploading image';
        }
    } else {
        echo 'No image uploaded';
    }
}
?>