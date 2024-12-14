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
  $sql = "SELECT nom, prenom, adresse, email, telephone,motdepasse,image FROM medecin "; // Modifier id selon votre base de données

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {  
      $row = $result->fetch_assoc();
  } else {
      echo "Aucun résultat trouvé";
  }

  $conn->close();
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

      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->

      <nav class="header-nav ms-auto">
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

    

    <section><h3 class="custom-heading">Profile</h3>
    <form action="modifier_medecin.php" method="post" enctype="multipart/form-data">

      <div class="row">
          <div class="col-lg-4">
              <div class="card mb-4">
                  <div class="card-body text-center">
                  <img src="uploads/<?php echo $row["image"]; ?>" alt="medecin" class="rounded-circle img-fluid" style="width: 150px;">

                      <h5 class="my-3"></h5>
                      <?php echo "<p class='text-muted mb-0'>" . $row["nom"] . "</p>"; ?><hr>
                      <?php echo "<p class='text-muted mb-0'>" . $row["prenom"] . "</p>"; ?><hr>
                      <?php echo "<p class='text-muted mb-0'>" . $row["adresse"] . "</p>"; ?><hr>
                      <?php echo "<p class='text-muted mb-0'>" . $row["email"] . "</p>"; ?><hr>
                      <?php echo "<p class='text-muted mb-0'>" . $row["telephone"] . "</p>"; ?><hr>

                  </div>
              </div>
          </div>
          
          <div class="col-lg-8">
      <div class="card mb-4">
          <div class="card-body">
              <form action="modifier_medecin.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Nom</p>
                      </div>
                      <div class="col-sm-9">
                          <input type="text" name="nom" value="<?php echo $row['nom']; ?>">
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Prénom</p>
                      </div>
                      <div class="col-sm-9">
                          <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>">
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Adresse</p>
                      </div>
                      <div class="col-sm-9">
                          <input type="text" name="adresse" value="<?php echo $row['adresse']; ?>">
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                      </div>
                      <div class="col-sm-9">
                          <input type="email" name="email" value="<?php echo $row['email']; ?>">
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Téléphone</p>
                      </div>
                      <div class="col-sm-9">
                          <input type="text" name="telephone" value="<?php echo $row['telephone']; ?>">
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Photo de profile</p>
                      </div>
                      <div class="col-sm-9">
                          <input type="file" name="image">
                      </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="d-flex justify-content-end mb-2">
                      <button type="submit" class="register-button">Modifier</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

      </div>
    </form>
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