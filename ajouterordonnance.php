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


  <!--tableau-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

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
   <body>
    
    <section>
        <h3 class="custom-heading">Ordonnance</h3>
        <section class="h-100 bg-red">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="card-body p-md-5">
                            <form action="ajouterordo.php" method="POST">
                                <input type="hidden" name="id_fiche" value="<?php echo htmlspecialchars($_POST['id_fiche'] ?? ''); ?>">
                                <div class="mb-3 mx-auto" style="width: 75%;"> <!-- Ajout des classes mx-auto et width pour centrer le formulaire -->
                                    <label for="ordonnance" class="form-label">Ordonnance:</label>
                                    <textarea class="form-control" id="ordonnance" name="ordonnance" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter Ordonnance</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
        <div class="container py-5">
          <h3 class="custom-heading">Liste des ordonnances</h3>
          <form class="search-form d-flex align-items-center" method="POST" action="">
            <input type="text" name="cin" class="form-control" placeholder="Rechercher une ordonance par CIN" aria-label="Rechercher un patient" aria-describedby="button-addon2">
            <button type="submit" class="btn btn-outline-secondary" id="button-addon2">Rechercher</button>
          </form>
          <div class="ftco-section">
            <div class="row">
              <div class="col-md-12">
                <div class="table-wrap">
                  <form action="" method="POST">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th><strong>#</strong></th>
                          <th><strong>Date_Ordonnance</strong></th>
                          <th><strong>Nom</strong></th>
                          <th><strong>Prénom</strong></th>
                          <th><strong>Ordonnance</strong></th>
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

// Requête SQL pour sélectionner les données nécessaires en utilisant une jointure avec la table des patients
$sql = "SELECT  p.nom, p.prenom, o.ordonnance,o.cin, o.id_ordonnance
        FROM ordonnance o 
        INNER JOIN patient p ON o.cin = p.cin";
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
        echo "<td class='ordonnance-text'>" . $row["ordonnance"] . "</td>"; // Ajout d'une classe pour cibler le contenu d'ordonnance
        echo "<td><button class=\"print-button\">Imprimer Ordonnance</button></td>"; // Bouton pour imprimer l'ordonnance
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Aucune ordonnance trouvé.</td></tr>";
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
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/glidejs/glide.min.js"></script>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"86beaa847ef5777c","version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
  <script>
    document.querySelectorAll('.print-button').forEach(button => {
        button.addEventListener('click', function() {
            var ordonnanceText = this.closest('tr').querySelector('.ordonnance-text').textContent;
            if (ordonnanceText.trim() === '') {
                alert('Aucun contenu d\'ordonnance à imprimer.');
            } else {
                var printWindow = window.open('', '_blank');
                printWindow.document.open();
                printWindow.document.write('<html><head><title>Imprimer Ordonnance</title></head><body>');
                printWindow.document.write('<pre>' + ordonnanceText + '</pre>');
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
            }
        });
    });
</script>

</body>

</html>