<?php
include("config.php");
$message = "";

if(isset($_POST["rdv"])) {
    // Récupération des valeurs du formulaire
    $medecin = $_POST["médecin"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Requête d'insertion préparée
    $insert = "INSERT INTO listerendnc (medecin, patient, age, phone, email, date, time) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Préparation de la requête
    $stmt = $connexion->prepare($insert);

    // Exécution de la requête avec les valeurs
    $success = $stmt->execute([$medecin, $name, $age, $phone, $email, $date, $time]);
   
    if ($success) {
        $message = "Le rdv a été ajouté avec succès";
    } else {
        $errorInfo = $stmt->errorInfo();
        $message = "Erreur lors de l'insertion : " . $errorInfo[2];
    }
} else {
    $message = "Les données du formulaire n'ont pas été correctement soumises.";
}

// Redirection vers index.php après l'insertion (ou en cas d'erreur)
header('Location: index.php?message=' . urlencode($message));
?>
