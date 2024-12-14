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
$sql = "SELECT image, nom, prenom, adresse, email, telephone, motdepasse FROM medecin"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Aucun résultat trouvé";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    
    // Vérifier si une image a été téléchargée
    if ($_FILES["image"]["size"] > 0) {
        $image = $_FILES["image"]["name"];
        $targetFile = "uploads/" . basename($image);
        
        // Vérifier si le fichier a été téléchargé avec succès
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Mettre à jour l'image dans la base de données
            $sql = "UPDATE medecin SET image='$image' "; 
            if ($conn->query($sql) === TRUE) {
                echo "Image updated successfully";
            } else {
                echo "Error updating image: " . $conn->error;
            }
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    }
    
    // Mettre à jour les autres champs
    $sql = "UPDATE medecin SET nom='$nom', prenom='$prenom', adresse='$adresse', email='$email', telephone='$telephone'"; // Modifier id selon votre cas
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";

        // Rediriger l'utilisateur vers la page profilmedecin.php après la modification réussie
        header("Location: profilmedecin.php");
        exit(); // Assurez-vous d'ajouter exit() pour arrêter l'exécution du script après la redirection
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
