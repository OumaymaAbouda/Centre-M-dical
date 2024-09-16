<?php
include("config.php");

if(isset($_POST["modifier"])){
    $ID = $_POST['id'];
    $name = $_POST["nom"];
    $image = $_FILES["image"];
    $description=$_POST['description'];

    if(isset($image)) {
        $image_location = $image["tmp_name"];
        $image_name = $image["name"];
        $image_up = "images_sp/".$image_name;

        if(move_uploaded_file($image_location, 'images_sp/'.$image_name)){
            // Utiliser les valeurs directement dans la requête SQL
            /*$update = $connexion->prepare("UPDATE specialite SET name='$name',description='$description', image='$image_up' WHERE id=$ID ");
            $update->execute();*/
            $update = "UPDATE specialite SET name=?, description=?, image=? WHERE id=?";
             $stmt = $connexion->prepare($update);
             $stmt->execute([$name, $description, $image_up, $ID]);

            
            echo '<script>alert("Spécialité mise à jour");</script>';
        } else {
            echo 'Erreur lors du téléchargement de l\'image';
        }
    } else {
        echo 'Aucune image téléchargée';
    }
    header('location:index.html');
}
?>