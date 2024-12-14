<?php
session_start(); // Démarrer la session

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $date_rdv = $_POST['DateRDV'];
    $heure_rdv = $_POST['horaire'];

    // Connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $nom_base_de_donnees = "BD_cabinet";
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }

    // Requête SQL pour mettre à jour les données du rendez-vous
    $sql = "UPDATE rdv SET nom='$nom', prenom='$prenom', telephone='$telephone', daterdv='$date_rdv', horaire='$heure_rdv' WHERE telephone=$telephone";

    // Exécuter la requête
    if ($connexion->query($sql) === TRUE) {
        // Message de succès (vous pouvez le stocker dans une variable de session si vous souhaitez l'afficher sur une autre page)
        $_SESSION['success_message'] = "RDV a été mis à jour avec succès.";
        // Rediriger l'utilisateur vers la page listerdv.php
        header("Location: listerdv.php");
        exit; // Arrêter l'exécution du script après la redirection
    } else {
        // Afficher un message d'erreur en cas d'échec de la mise à jour
        echo "Erreur lors de la mise à jour des données du rdv : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    // Afficher un message d'erreur si le paramètre 'telephone' est manquant dans les données postées
    echo "Paramètre 'telephone' manquant dans les données postées.";
}
?>
