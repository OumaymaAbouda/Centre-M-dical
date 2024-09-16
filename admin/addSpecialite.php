<?php
include("config.php");

if(isset($_POST["ajouter"])){ 
    $name=$_POST["nom"];
    $image=$_FILES["image"];
    $description=$_POST["description"];
    if(isset($image)) {
        $image_location = $image["tmp_name"];
        $image_name = $image["name"];
        $image_up = "images_sp" .$image_name;

        if(move_uploaded_file($image_location, 'images_sp'.$image_name)){
            /*$insert = $connexion->prepare("INSERT INTO specialite(name,description,image) VALUES('$name','$description','$image_up')");
            $insert->execute();*/
            $insert = "INSERT INTO specialite(name,description,image) VALUES (?,?,?)";
            $connexion->prepare($insert)->execute([$name, $description, $image_up]);

            // Rediriger avant d'afficher un message
            header('Location: addSpecialite.html');
            exit; // Terminer l'exécution du script après la redirection
        } else {
            echo 'Error uploading image';
        }
    } else {
        echo 'No image uploaded';
    }
}
?>