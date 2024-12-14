<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_cabinet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête SQL pour récupérer les détails du médecin
$sql = "SELECT nom, prenom, adresse, email, telephone, datedenaissance, motdepasse, genre, image FROM secretaire"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {  
    $row = $result->fetch_assoc();
} else {
    echo "Aucun résultat trouvé";
}

$conn->close();

// Traitement du formulaire lorsqu'il est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $datedenaissance = $_POST["datedenaissance"];
    $genre = $_POST["genre"];
   
    // Vérification si une image a été téléchargée
    if ($_FILES["image"]["size"] > 0) {
        $image = $_FILES["image"]["name"];
        $targetFile = "uploads/" . basename($image);
        
        // Vérification si le fichier a été téléchargé avec succès
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Mise à jour de l'image dans la base de données
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "UPDATE secretaire SET image='$image'"; 
            if ($conn->query($sql) === TRUE) {
                echo "Image mise à jour avec succès";
            } else {
                echo "Erreur lors de la mise à jour de l'image : " . $conn->error;
            }
            $conn->close();
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    }
    
    // Mise à jour des autres champs
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "UPDATE secretaire SET nom='$nom', prenom='$prenom', adresse='$adresse', email='$email', telephone='$telephone', datedenaissance='$datedenaissance', genre='$genre'"; 
    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement mis à jour avec succès";
        // Redirection vers la page profilsecretaire.php après la modification
        header("Location: profilsecretaire.php");
        exit; // Assurez-vous de quitter le script après la redirection
    } else {
        echo "Erreur lors de la mise à jour de l'enregistrement : " . $conn->error;
    }
    $conn->close();
}
?>
