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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

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

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->          
      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
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
            <a href="creerpatient.html">
              <i class="bi bi-circle"></i><span>Créer Patient</span>
            </a>
          </li>
          <li>
            <a href="listepatient.php">
              <i class="bi bi-circle"></i><span>Liste Patient</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>RDV</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="creerrdv.html">
              <i class="bi bi-circle"></i><span>Créer RDV</span>
            </a>
          </li>
          <li>
            <a href="listerdv.php">
              <i class="bi bi-circle"></i><span>Liste RDV</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        </ul>
      </li><!-- End Charts Nav -->

      
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
        </ul>
      </li><!-- End Icons Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="profilsecretaire.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

    
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <h3 class="custom-heading">Modifier_Rendez_vous</h3>
    <?php
// Récupérer l'identifiant du rendez-vous à modifier depuis l'URL
$telephone = $_GET['telephone'];

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

// Requête SQL pour récupérer les informations du rendez-vous à modifier
$sql = "SELECT * FROM rdv WHERE telephone = $telephone";
$resultat = mysqli_query($connexion, $sql);

// Vérifier si le rendez-vous existe
if (mysqli_num_rows($resultat) == 1) {
    $row = mysqli_fetch_assoc($resultat);
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $telephone = $row['telephone'];
    $date_rdv = $row['daterdv'];
    $heure_rdv = $row['horaire'];
} else {
    echo "Rendez-vous non trouvé.";
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>

<section class="h-100 bg-red">

    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="card-body p-md-5">
                        <form class="row g-3" method="post" action="modifierrdv.php">
                            <div class="col-md-6">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir Nom" value="<?php echo $nom; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="prenom" class="form-label"><strong>Prénom</strong></label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisir Prénom" value="<?php echo $prenom; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                <img src="assets/img/rdv-rendez-vous.gif" alt="Sample photo" width="100" height="100">
                            </div>
                            <div class="col-12">
                                <label for="telephone" class="form-label"><strong>Téléphone</strong></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Saisir téléphone" value="<?php echo $telephone; ?>" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="DateRDV" class="form-label"><strong>Date_Rdv</strong></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                    <input type="date" class="form-control" id="DateRDV" name="DateRDV" value="<?php echo $date_rdv; ?>" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="horaire" class="form-label"><strong>Horaire</strong></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                    <input type="time" class="form-control" id="horaire" name="horaire" value="<?php echo $heure_rdv; ?>" required>
                                </div>
                            </div>
                            <!-- Vous pouvez ajouter un champ caché pour stocker l'ID du rendez-vous -->
                            <input type="hidden" name="id_rdv" value="<?php echo $id_rdv; ?>">
                            <div class="d-flex justify-content-end pt-3">
                                <button type="reset" class="cancel-button">Annuler</button>
                                <button type="submit" class="register-button">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

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

</body>

</html>