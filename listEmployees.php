<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: index.php');
  exit();
}
include '../Controller/reclamationCRUD.php';
$reclamationC = new reclamationC();
$listereclamations = $reclamationC->afficherreclamations();



?>

<html>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>First delivery </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="./img/LOGOVERT.png" alt="Logo" />
        <h1>First Delivery</h1>
      </a>
      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <div style="text-align: right;">

        </div>


        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->


        <div class="header-social-links">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          <a href="logout.php">Logout</a>
          <a href="History.php">History</a>
        </div>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <div class="page-header d-flex align-items-center">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>List employees</h2>


        </div>
      </div>
    </div>
  </div><!-- End Page Header -->




  <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      .my-table {
        background-color: white;
        border-collapse: collapse;
        width: 100%;
        font-size: 1em;
        font-family: Arial, sans-serif;
        color: #333;
      }

      .my-table th,
      .my-table td {
        padding: 0.5em;
        border: 1px solid #ccc;
      }

      .my-table th {
        background-color: #f7f7f7;
        text-align: left;
        font-weight: bold;
      }

      .my-table td {
        text-align: left;
      }

      .my-table td form {
        display: inline-block;
      }

      .my-table td a {
        display: inline-block;
        padding: 0.5em;
        background-color: #f44336;
        color: #fff;
        text-decoration: none;
        border-radius: 2px;
      }

      .my-table td a:hover {
        background-color: #d32f2f;

      }
    </style>
  </head>

  <body>


    <input type="text" id="search-term" placeholder="Search employee ..." style="padding: 5px; border: 1px solid #999;">

    <style>
      .custom-button {
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        text-decoration: none;
        font-weight: bold;
        border-radius: 3px;
      }

      .custom-button a {
        text-decoration: none;
        color: white;
      }
    </style>

    <button class="custom-button">
      <a href="ajouteremployee.php">Add Employee</a>
    </button>








    <table class="my-table" border="1" align="center" id="employee-table">
      <tr>


        <th>matricule</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Phone number</th>
        <th>cin</th>
        <th>date d'embauche</th>
        <th>departement</th>
        <th>post</th>
        <th>unite</th>
        <th>fonction_entreprise_code</th>
        <th>sexe</th>


      </tr>


      <?php foreach ($listereclamations as $employee) { ?>
        <tr>
          <td>
            <a href="employe-details.php?id=<?php echo $employee['ID']; ?>"><?php echo $employee['ID']; ?></a>
          </td>
          <td>
            <?php echo $employee['firstName']; ?>
          </td>
          <td>
            <?php echo $employee['lastName']; ?>
          </td>
          <td>
            <?php echo $employee['phoneNumber']; ?>
          </td>
          <td>
            <?php echo $employee['cin']; ?>
          </td>
          <td>
            <?php echo $employee['date_embauche']; ?>
          </td>
          <td>
            <?php echo $employee['departement']; ?>
          </td>
          <td>
            <?php echo $employee['post']; ?>
          </td>
          <td>
            <?php echo $employee['unite']; ?>
          </td>
          <td>
            <?php echo $employee['fonction_entreprise_code']; ?>
          </td>
          <td>
            <?php echo $employee['sexe']; ?>
          </td>

          <td>
            <!-- <form method="GET" action="modifier.php?ID=<?PHP echo $employee['ID']; ?>">
              <input type="hidden" value="<?PHP echo $employee['ID']; ?>" name="ID" />
              <button  type="submit" name="Modifier" >Modifier</button>
            </form> -->
            <a href="modifier.php?ID=<?PHP echo $employee['ID']; ?>" class="btn btn-warning">Modifier</a>
          </td>
          <td>
            <a href="supprimer.php?ID=<?php echo $employee['ID']; ?>">Supprimer</a>
          </td>
        </tr>
      <?php } ?>

    </table>
    <script>
      $(function () {
        $("#search-term").on("input", function () {
          var searchTerm = $(this).val().trim();

          if (searchTerm.length > 0) {
            $.ajax({
              url: "search.php",
              method: "POST",
              data: { searchTerm: searchTerm },
              dataType: "json",
              success: function (data) {
                var rowsHtml = "<tr>" +
                  "<th>ID</th>" +
                  "<th>firstName</th>" +
                  "<th>lastName</th>" +
                  "<th>phoneNumber</th>" +
                  "<th>cin</th>" +
                  "<th>date_embauche</th>" +
                  "<th>departement</th>" +
                  "<th>post</th>" +
                  "<th>unite</th>" +
                  "<th>fonction_entreprise_code</th>" +
                  "<th>sexe</th>" +
                  "<th>Supprimer</th>" +
                  "</tr>";
                for (var i = 0; i < data.length; i++) {
                  rowsHtml += "<tr>" +
                    "<td>" + data[i].ID + "</td>" +
                    "<td>" + data[i].firstName + "</td>" +
                    "<td>" + data[i].lastName + "</td>" +
                    "<td>" + data[i].phoneNumber + "</td>" +
                    "<td>" + data[i].cin + "</td>" +
                    "<td>" + data[i].date_embauche + "</td>" +
                    "<td>" + data[i].departement + "</td>" +
                    "<td>" + data[i].post + "</td>" +
                    "<td>" + data[i].unite + "</td>" +
                    "<td>" + data[i].fonction_entreprise_code + "</td>" +
                    "<td>" + data[i].sexe + "</td>" +
                    "<td>" +
                    "<a href='supprimer.php?ID=" + data[i].ID + "'>Supprimer</a>" +
                    "</td>" +
                    "</tr>";
                }

                $("#employee-table").html(rowsHtml);
              }
            });
          } else {
            location.reload();
          }
        });
      });
    </script>







    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

 <!--    <div id="preloader">
      <div class="line"></div>
    </div> -->
    <!-- ... (other HTML code) ... -->

    <body>
      <div class="text-center">
        <a href="exel.php">Download</a>
      </div>
      <hr>
      <script>
    // ... (JavaScript validation code) ...
      </script>
      <!-- ... (rest of the HTML code) ... -->
    </body>
    <!-- ... (rest of the HTML code) ... -->



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>First delivery</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">First delivery</a>
        </div>
      </div>
    </footer>



    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

</html>