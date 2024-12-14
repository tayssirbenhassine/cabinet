<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter_Médecin</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('assets/img/login.png');
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
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <h4 class="login-heading">Se connecter au CABINET_MEDICAL</h4>
                    <form action="#" method="post" class="login-form" id="login-form">
                    <div class="form-group mt-3">
                            <label for="role">Sélectionner un rôle :</label><br>
                            <input type="radio" id="role_medecin" name="role" value="medecin">
                            <label for="role_medecin">Médecin</label><br>
                            <input type="radio" id="role_secretaire" name="role" value="secretaire">
                            <label for="role_secretaire">Secrétaire</label><br>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(event) {
                event.preventDefault(); // Empêche le formulaire de se soumettre normalement

                // Récupérer la valeur du rôle sélectionné
                var selectedRole = $('input[name="role"]:checked').val();

                // Rediriger en fonction du rôle sélectionné
                if (selectedRole === 'medecin') {
                    window.location.href = 'pageloginmedecin.php';
                } else if (selectedRole === 'secretaire') {
                    window.location.href = 'pageloginsecretaire.php';
                }
            });
        });
    </script>

</body>

</html>
