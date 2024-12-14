<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire et les nettoyer
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $date_rdv = htmlspecialchars($_POST['DateRDV']);
    $heure_rdv = htmlspecialchars($_POST['horaire']);

    // Vérifier si les champs obligatoires sont vides
    if (empty($prenom) || empty($nom) || empty($telephone) || empty($date_rdv) || empty($heure_rdv)) {
        echo "Tous les champs doivent être remplis.";
    } else {
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

        // Requête SQL pour insérer les données dans la table rendez_vous
        $sql_rdv = "INSERT INTO rdv (nom,prenom,telephone,daterdv,horaire) 
                    VALUES ('$nom', '$prenom', '$telephone' ,'$date_rdv','$heure_rdv')";

        // Exécution de la requête
        if (mysqli_query($connexion, $sql_rdv)) { 
            // Redirection vers une page de confirmation
            header("Location: listerdv.php");
            exit(); // Assure que le script s'arrête ici pour éviter toute autre exécution
        } else {
            echo "Erreur: " . $sql_rdv . "<br>" . mysqli_error($connexion);
        }

        // Fermer la connexion à la base de données
        mysqli_close($connexion);
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}
?>
