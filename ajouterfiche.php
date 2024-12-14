<?php
// Vérifier si le formulaire a été soumis avec la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $cin = $_POST['cin'];
    $observation = $_POST['observation'];

    // Connexion à la base de données (à adapter avec vos informations de connexion)
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "BD_cabinet";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }

    // Requête SQL pour insérer l'observation dans la table fichier
    $sql_insertion = "INSERT INTO fichier (cin, observation) VALUES (?, ?)";

    // Préparation de la requête
    $stmt = $connexion->prepare($sql_insertion);

    // Liaison des paramètres et exécution de la requête
    if ($stmt) {
        $stmt->bind_param("ss", $cin, $observation);
        if ($stmt->execute()) {
            // Redirection vers la page listepatientmedecin.php ou toute autre page appropriée
            header("Location: ajouterfichier.php");
            exit;
        } else {
            echo "Erreur lors de l'ajout de l'observation : " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erreur lors de la préparation de la requête : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
}
?>
