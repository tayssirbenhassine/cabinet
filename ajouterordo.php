<?php
// Vérifier si le formulaire a été soumis avec la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_fiche = $_POST['id_fiche'];
    $ordonnance = $_POST['ordonnance'];

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

    // Requête SQL pour récupérer le cin à partir de la table patient
    $sql_cin = "SELECT p.cin
                FROM patient p
                INNER JOIN fichier f ON p.cin = f.cin
                WHERE f.id_fiche = ?";
    $stmt_cin = $connexion->prepare($sql_cin);
    $stmt_cin->bind_param("i", $id_fiche);
    $stmt_cin->execute();
    $result_cin = $stmt_cin->get_result();

    // Vérifier si une ligne est retournée
    if ($result_cin->num_rows > 0) {
        $row_cin = $result_cin->fetch_assoc();
        $cin = $row_cin['cin'];

        // Requête SQL pour insérer l'ordonnance dans la table ordonnance
        $sql_insertion = "INSERT INTO ordonnance (id_fiche, cin, ordonnance) VALUES (?, ?, ?)";

        // Préparation de la requête
        $stmt = $connexion->prepare($sql_insertion);

        // Liaison des paramètres et exécution de la requête
        if ($stmt) {
            $stmt->bind_param("iss", $id_fiche, $cin, $ordonnance);
            if ($stmt->execute()) {
                // Redirection vers la page ordonnance.php ou toute autre page appropriée
                header("Location: ajouterordonnance.php");
                exit;
            } else {
                echo "Erreur lors de l'ajout de l'ordonnance : " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Erreur lors de la préparation de la requête : " . $connexion->error;
        }
    } else {
        echo "Aucun patient trouvé pour l'ID de fiche spécifié.";
    }

    // Fermer la connexion à la base de données
    $connexion->close();
}
?>
