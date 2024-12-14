<?php
session_start();

// Vérifier si le formulaire de modification a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le paramètre 'cin' est présent dans les données postées
    if (isset($_POST['cin'])) {
        // Récupérer le CIN du patient à modifier depuis les données postées
        $cin = $_POST['cin'];

        // Récupérer les données postées depuis le formulaire
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $cnam = $_POST['cnam'];
        $datedenaissance = $_POST['datedenaissance'];
        $metier = $_POST['metier'];
        $genre = $_POST['genre'];
        $adresse = $_POST['adresse'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];

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

        // Préparer la requête SQL avec des instructions paramétrées
        $sql = "UPDATE patient SET prenom=?, nom=?, cnam=?, datedenaissance=?, metier=?, genre=?, adresse=?, email=?, telephone=? WHERE cin=?";
        $requete_preparee = $connexion->prepare($sql);

        // Liaison des paramètres
        $requete_preparee->bind_param("ssssssssss", $prenom, $nom, $cnam, $datedenaissance, $metier, $genre, $adresse, $email, $telephone, $cin);

        // Exécuter la requête préparée
        if ($requete_preparee->execute()) {
            // Message de succès (vous pouvez le stocker dans une variable de session si vous souhaitez l'afficher sur une autre page)
            $_SESSION['success_message'] = "Les données du patient ont été mises à jour avec succès.";
            // Rediriger l'utilisateur vers la page listepatient.php
            header("Location: listepatient.php");
            exit; // Arrêter l'exécution du script après la redirection
        } else {
            // Afficher un message d'erreur en cas d'échec de la mise à jour
            echo "Erreur lors de la mise à jour des données du patient : " . $connexion->error;
        }

        // Fermer la connexion à la base de données
        $connexion->close();
    } else {
        // Afficher un message d'erreur si le paramètre 'cin' est manquant dans les données postées
        echo "Paramètre 'cin' manquant dans les données postées.";
    }
} else {
    // Redirection vers une page d'erreur si le formulaire n'a pas été soumis via la méthode POST
    header("Location: erreur.php");
    exit;
}
?>

