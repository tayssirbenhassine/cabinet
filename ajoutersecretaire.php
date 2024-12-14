<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    // Récupérer les valeurs des champs du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $datedenaissance = $_POST['datedenaissance'];
    $genre = $_POST['genre'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $motdepasse = $_POST['motdepasse'];

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

    // Requête SQL pour vérifier si l'email existe déjà
    $verification_sql = "SELECT * FROM secretaire WHERE email='$email'";
    $resultat_verification = $connexion->query($verification_sql);

    if ($resultat_verification->num_rows > 0) {
        // L'email existe déjà dans la table, redirection vers la page creersecretaire.html
        header("Location: creersecretaire.html");
        exit();
    }

    // Requête SQL pour insérer les données dans la table secretaire
    $sql = "INSERT INTO secretaire (prenom, nom, datedenaissance, genre, adresse, email, telephone, motdepasse) 
    VALUES ('$prenom', '$nom', '$datedenaissance', '$genre', '$adresse', '$email', '$telephone', '$motdepasse')";

    // Exécution de la requête
    if ($connexion->query($sql) === TRUE) { 
        // Redirection vers la page listesecretaire.php
        header("Location: listesecretaire.php");
        exit(); // Assure que le script s'arrête ici pour éviter toute autre exécution
    } else {
        echo "Erreur: " . $sql . "<br>" . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
}
?>
