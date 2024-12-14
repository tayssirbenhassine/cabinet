<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CABINET</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/cabinet.gif" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" width="100" height="60 px">
        <H4>CABINET_MEDICAL</H4>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Docteur</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
           

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profilmedecin.php">
                <i class="bi bi-person"></i>
                <span>Mon Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Déconnexion</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
  
      
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Patient</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="listepatientmedecin.php">
              <i class="bi bi-circle"></i><span>Liste Patient</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#rdv-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>RDV</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="rdv-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="listerdvmedecin.php">
              <i class="bi bi-circle"></i><span>Liste RDV</span>
            </a>
          </li>
        </ul>
      </li><!-- End RDV Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#secretary-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Sécretaire</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="secretary-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="listesecretaire.php">
              <i class="bi bi-circle"></i><span>Liste secrétaire</span>
            </a>
          </li>
          <li>
            <a href="creersecretaire.html">
              <i class="bi bi-circle"></i><span>Créer_secrétaire</span>
            </a>
          </li>
        </ul>
      </li><!-- End Secretary Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" href="profilmedecin.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main container">
   <section class="h-100 bg-red">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="card-body p-md-5">
                            <?php
                            // Vérifier si le CIN a été envoyé depuis le formulaire précédent
                            if (isset($_POST['cin'])) {
                                // Connexion à la base de données (à remplacer par vos propres informations)
                                $serveur = "localhost";
                                $utilisateur = "root";
                                $mot_de_passe = "";
                                $base_de_donnees = "BD_cabinet";

                                // Connexion
                                $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

                                // Vérifier la connexion
                                if ($connexion->connect_error) {
                                    die("Échec de la connexion : " . $connexion->connect_error);
                                }

                                // Récupérer le nom et le prénom du patient à partir de la base de données
                                $cin = $_POST['cin'];
                                $sql = "SELECT nom, prenom FROM patient WHERE cin = '$cin'";
                                $resultat = $connexion->query($sql);

                                if ($resultat->num_rows > 0) {
                                    $row = $resultat->fetch_assoc();
                                    $nom = $row['nom'];
                                    $prenom = $row['prenom'];
                                } else {
                                    $nom = "Nom non trouvé";
                                    $prenom = "Prénom non trouvé";
                                }

                                // Fermer la connexion à la base de données
                                $connexion->close();
                            } else {
                                $nom = "Nom non trouvé";
                                $prenom = "Prénom non trouvé";
                            }
                            ?>
                            <h5 class="card-title mb-4">Fiche de <?php echo htmlspecialchars($prenom . ' ' . $nom); ?></h5>
                            <form action="ajouterfiche.php" method="POST">
                                <input type="hidden" name="cin" value="<?php echo htmlspecialchars($_POST['cin'] ?? ''); ?>">
                                <div class="mb-3 mx-auto" style="width: 75%;"> <!-- Ajout des classes mx-auto et width pour centrer le formulaire -->
                                    <label for="observation" class="form-label">Observation:</label>
                                    <textarea class="form-control" id="observation" name="observation" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter Observation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


      
<section>
    <div class="container py-5">
        <h3 class="custom-heading">Liste des Observations</h3>
        <!-- Update your search form here -->
        <form class="search-form d-flex align-items-center" method="POST" action="">
            <input type="text" name="cin" class="form-control" placeholder="Rechercher un patient par CIN" aria-label="Rechercher un patient" aria-describedby="button-addon2">
            <button type="submit" class="btn btn-outline-secondary" id="button-addon2">Rechercher</button>
        </form>
        <div class="ftco-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <form action="ajouterordonnance.php" method="POST"> <!-- Formulaire pour ajouter une ordonnance -->
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th><strong>#</strong></th>
                                        <th><strong>Date_Observation</strong></th>
                                        <th><strong>Nom</strong></th>
                                        <th><strong>Prénom</strong></th>
                                        <th><strong>Observation</strong></th>
                                        <th><strong>Action</strong></th> <!-- Nouvelle colonne pour le bouton "Choisir" -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Connexion à la base de données (à remplacer par vos propres informations)
                                    $serveur = "localhost";
                                    $utilisateur = "root";
                                    $mot_de_passe = "";
                                    $base_de_donnees = "BD_cabinet";

                                    // Connexion
                                    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

                                    // Vérifier la connexion
                                    if ($connexion->connect_error) {
                                        die("Échec de la connexion : " . $connexion->connect_error);
                                    }

                                    // Requête SQL pour sélectionner les données nécessaires en utilisant une jointure avec la table des patients
                                    $sql = "SELECT  p.nom, p.prenom, f.observation, f.cin, f.id_fiche
                                            FROM fichier f 
                                            INNER JOIN patient p ON f.cin = p.cin";
                                    $resultat = $connexion->query($sql);

                                    // Vérifier s'il y a des résultats
                                    if ($resultat->num_rows > 0) {
                                        $numero_ligne = 1; // Initialisation du compteur de ligne
                                        // Parcourir chaque ligne de résultat
                                        while ($row = $resultat->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $numero_ligne++ . "</td>"; // Afficher le numéro de ligne et incrémenter le compteur
                                            echo "<td>" . date("Y-m-d") . "</td>"; // Format de date: YYYY-MM-DD
                                            echo "<td>" . $row["nom"] . "</td>";
                                            echo "<td>" . $row["prenom"] . "</td>";
                                            echo "<td>" . $row["observation"] . "</td>";
                                            echo "<td>
                                                    <button type='submit' class='btn btn-primary' name='id_fiche' value='" . $row['id_fiche'] . "'>ajouter_ordonnance</button> <!-- Bouton pour choisir -->
                                                </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>Aucun patient trouvé.</td></tr>";
                                    }

                                    // Fermer la connexion à la base de données
                                    $connexion->close();
                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <!-- Insert your footer content here -->
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"86beaa847ef5777c","version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>