<?php
session_start();

// Vérification des informations de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données (à remplacer par vos propres informations de connexion)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "BD_cabinet";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Récupération des données du formulaire
    $email = $_POST['inputEmail']; // Utilisez le bon nom de champ d'entrée pour l'e-mail
    $password = $_POST['inputPassword']; // Utilisez le bon nom de champ d'entrée pour le mot de passe

    // Préparation de la requête SQL
    $sql = "SELECT * FROM secretaire WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Sécretaire trouvé dans la base de données
        $row = $result->fetch_assoc();
        if ($password === $row['motdepasse']) {
            // Mot de passe correct, rediriger vers la page d'accueil de la sécretaire
            header("Location: listepatient.php");
            exit;
        } else {
            // Mot de passe incorrect, afficher un message d'erreur
            $error = "Mot de passe incorrect.";
        }
    } else {
        // Sécretaire non trouvée dans la base de données, afficher un message d'erreur
        $error = "Email incorrect.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter_Secretaire</title>

    <!-- Favicons -->
    <link rel="icon" href="assets/img/cabinet.gif">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('assets/img/loginsecretaire.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .login-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            border-radius: 5px;
        }

        .login-form button[type="submit"] {
            border-radius: 5px;
        }

        .social-icons a {
            color: #007bff;
            margin-right: 10px;
        }

        .social-icons a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <h4 class="login-heading">Se connecter au <br>CABINET_MEDICAL</h4>
                    <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Entrer email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Mot de Passe">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                        <?php if (isset($error)) { ?>
                            <div class="text-danger mt-3"><?php echo $error; ?></div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
