<?php
session_start();

// Placez cela dans votre fichier PHP de suppression (supprimerpatient.php)

// Vérifie si la requête est bien une requête POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Connexion à la base de données (à remplacer par vos propres informations)
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "BD_cabinet";

    // Récupérer l'identifiant du secretaire à supprimer depuis la requête POST
    $emial = $_POST['email']; 

    // Connexion
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Échec de la connexion : " . $connexion->connect_error);
    }

    // Requête SQL pour supprimer le patient
    $sql = "DELETE FROM secretaire WHERE email = '$email'";

    // Exécuter la requête
    if ($connexion->query($sql) === TRUE) {
        // Message de succès (vous pouvez le stocker dans une variable de session si vous souhaitez l'afficher sur une autre page)
        $_SESSION['success_message'] = "<p style='color: red;'>Les données du sécretaire ont été supprimées avec succès.</p>";
        // Rediriger l'utilisateur vers la page listepatient.php
        header("Location: listesecretaire.php");
        exit; // Arrêter l'exécution du script après la redirection
    } else {
        // Afficher un message d'erreur en cas d'échec de la suppression
        echo "Erreur lors de la suppression des données du sécretaire : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    // Afficher un message d'erreur si le paramètre 'cin' est manquant dans les données postées
    echo "Paramètre 'email' manquant dans les données postées.";
}
?>
