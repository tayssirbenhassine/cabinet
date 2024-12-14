<?php
session_start();

// Vérifier si le paramètre 'cin' est présent dans les données postées
if (isset($_POST['cin'])) {
    // Récupérer le CIN du patient à supprimer depuis les données postées
    $cin = $_POST['cin'];

    // Connexion à la base de données (à remplacer par vos propres informations)
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "BD_cabinet";

    // Connexion
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Échec de la connexion : " . $connexion->connect_error);
    }

    // Supprimer d'abord les enregistrements associés dans la table "ordonnance"
    $sql_delete_ordonnance = "DELETE FROM ordonnance WHERE id_fiche IN (SELECT id_fiche FROM fichier WHERE cin='$cin')";
    if ($connexion->query($sql_delete_ordonnance) === TRUE) {
        // Ensuite, supprimer le patient de la table "patient"
        $sql_delete_patient = "DELETE FROM patient WHERE cin='$cin'";
        if ($connexion->query($sql_delete_patient) === TRUE) {
            // Message de succès
            $_SESSION['success_message'] = "Le patient et ses ordonnances ont été supprimés avec succès.";
            // Rediriger l'utilisateur vers la page listepatient.php
            header("Location: listepatient.php");
            exit; // Arrêter l'exécution du script après la redirection
        } else {
            // Afficher un message d'erreur en cas d'échec de suppression du patient
            echo "Erreur lors de la suppression du patient : " . $connexion->error;
        }
    } else {
        // Afficher un message d'erreur en cas d'échec de suppression des ordonnances
        echo "Erreur lors de la suppression des ordonnances : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    // Afficher un message d'erreur si le paramètre 'cin' est manquant dans les données postées
    echo "Paramètre 'cin' manquant dans les données postées.";
}
?>
