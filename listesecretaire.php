<?php
session_start();
?>
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


  <main id="main" class="main">
  <section>
  <h3 class="custom-heading">Liste des sécretaires</h3>
  <!-- Mettez à jour votre formulaire de recherche -->
<form class="search-form d-flex align-items-center" method="POST" action="listesecretaire.php">
    <input type="text" name="email" class="form-control" placeholder="Rechercher une sécrtaire par email" aria-label="Rechercher un patient" aria-describedby="button-addon2">
    <button type="submit" class="btn btn-outline-secondary" id="button-addon2">Rechercher</button>
</form>

  <!-- Message de succès -->
  <?php
    // Vérifier si un message de succès est présent dans la session
    if (isset($_SESSION['success_message'])) {
      echo "<div class='alert alert-success'>" . $_SESSION['success_message'] . "</div>";
      // Supprimer le message de succès de la session une fois qu'il a été affiché
      unset($_SESSION['success_message']);
    }
    ?>
    
  <div class="ftco-section">
    <div class="row">
      <div class="col-md-12">
        <div class="">
          <table class="table table-responsive">
            <thead>
              <tr>
                <th><strong>#</strong></th>
                <th><strong>Nom</strong></th>
                <th><strong>Prénom</strong></th>
                <th><strong>email</strong></th>
                <th><strong>Téléphone</strong></th>
                <th><strong>Adresse</strong></th>
                <th><strong>Genre</strong></th>
                <th><strong>Date de Naissance</strong></th>
                <th><strong>Action</strong></th>
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
              
              // Requête SQL pour sélectionner tous les patients
              $sql = "SELECT * FROM secretaire";
              $resultat = $connexion->query($sql);
              
              // Vérifier s'il y a des résultats
              if ($resultat->num_rows > 0) {
                  $numero_ligne = 1; // Initialisation du compteur de ligne
                  // Parcourir chaque ligne de résultat
                  while ($row = $resultat->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $numero_ligne++ . "</td>"; // Afficher le numéro de ligne et incrémenter le compteur
                      echo "<td>" . $row["nom"] . "</td>";
                      echo "<td>" . $row["prenom"] . "</td>";
                      echo "<td>" . $row["email"] . "</td>";
                      echo "<td>" . $row["telephone"] . "</td>";
                      echo "<td>" . $row["adresse"] . "</td>";
                      echo "<td>" . $row["genre"] . "</td>";
                      echo "<td>" . $row["datedenaissance"] . "</td>";

                      echo "<td>
                                <div class='dropdown'>
                                  <button class='btn btn-outline-secondary' type='sub' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                                    ...
                                  </button>
                                  <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                                    <li>
                                      <form action='supprimersecretaire.php' method='post'>
                                        <input type='hidden' name='email' value='" . $row['email'] . "'>
                                        <button type='submit' class='dropdown-item' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cette sécretaire?\")'>
                                          <i class='bi bi-trash'></i> Supprimer
                                        </button>
                                      </form>
                                    </li>
                                    <li>
                                    
                                  </form>
                                    </li>
                                  </ul>
                                </div>
                              </td>";
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='8'>Aucune sécretiare trouvé.</td></tr>";
              }
              
              // Fermer la connexion à la base de données
              $connexion->close();
              ?>
            </tbody>
          </table>
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