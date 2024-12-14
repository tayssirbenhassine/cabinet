<?php
$serveur = "localhost";
$utilisateur = "";
$mot_de_passe = "";
$nom_base_de_donnees = "bd_cabinet";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$nom_base_de_donnees", $utilisateur, $mot_de_passe);
    // Définir le mode d'erreur PDO à exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie.";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
