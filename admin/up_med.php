<?php
include("config.php");

if(isset($_POST["modifier"])){
    $ID = $_POST['id'];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $specialite = $_POST["spécialité"];
    $description = $_POST['description'];
    $mail = $_POST["mail"];

    // Vérification si une image est téléchargée
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $image_location = $_FILES["image"]["tmp_name"];
        $image_name = $_FILES["image"]["name"];
        $image_up = "images_med/".$image_name;

        // Déplacer l'image téléchargée vers le dossier des images
        if(move_uploaded_file($image_location, 'images_med/'.$image_name)){
            // Utiliser une requête préparée pour mettre à jour les données du médecin
            $update = "UPDATE medecin SET nom=?, prenom=?, email=?, specialite=?, description=?, image=? WHERE id=?";
            $stmt = $connexion->prepare($update);
            $stmt->execute([$nom, $prenom, $mail, $specialite, $description, $image_up, $ID]);
            
            echo '<script>alert("Médecin mis à jour");</script>';
            // Redirection vers la page d'accueil ou une autre page appropriée
            header('Location: index.html');
            exit(); // Terminer le script après la redirection
        } else {
            echo 'Erreur lors du téléchargement de l\'image';
        }
    } else {
        echo 'Aucune image téléchargée';
    }
}
?>
