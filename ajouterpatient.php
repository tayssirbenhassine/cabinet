<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    // Récupérer les valeurs des champs du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $cnam = $_POST['cnam'];
    $cin = $_POST['cin'];
    $datedenaissance = $_POST['datedenaissance'];
    $genre = $_POST['genre'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $metier = $_POST['metier'];

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

    // Requête SQL pour vérifier si le CIN existe déjà
    $verification_sql = "SELECT * FROM patient WHERE cin='$cin'";
    $resultat_verification = $connexion->query($verification_sql);

    if ($resultat_verification->num_rows > 0) {
        // Le CIN existe déjà dans la table, redirection vers la page creerpatient.html
        header("Location: creerpatient.html");
        exit();
    }

    // Requête SQL pour insérer les données dans la table patient
    $sql = "INSERT INTO patient (prenom, nom, cnam, cin, datedenaissance, genre, adresse, email, telephone, metier) 
            VALUES ('$prenom', '$nom', '$cnam', '$cin', '$datedenaissance', '$genre', '$adresse', '$email', '$telephone', '$metier')";

    // Exécution de la requête
    if (mysqli_query($connexion, $sql)) { 
        // Redirection vers la page listepatient.php
        header("Location: listepatient.php");
        exit(); // Assure que le script s'arrête ici pour éviter toute autre exécution
    } else {
        echo "Erreur: " . $sql . "<br>" . mysqli_error($connexion);
    }

    // Fermer la connexion à la base de données
    mysqli_close($connexion);
}
?>
