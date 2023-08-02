<?php
include('../config.php');
include('../Model/employee.php');
include('../Controller/employeeCRUD.php');
$error = "";
$departementList = new employeeCRUD();
$list = $departementList->getDepartement();


// create employee
$employee = null;
var_dump("POST1", $_POST);
echo ("POST1" . $_POST);
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["phoneNumber"]) &&
    isset($_POST["cin"]) &&
    isset($_POST["date_embauche"]) &&
    isset($_POST["departement"]) &&
    isset($_POST["post"]) &&
    isset($_POST["unite"]) &&
    isset($_POST["fonction_entreprise_code"]) &&
    isset($_POST["sexe"])


) {
    var_dump("POST2", $_POST);

    if (
        !empty($_POST["firstName"]) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["phoneNumber"]) &&
        !empty($_POST["cin"]) &&
        !empty($_POST["date_embauche"]) &&
        !empty($_POST["departement"]) &&
        !empty($_POST["post"]) &&
        !empty($_POST["unite"]) &&
        !empty($_POST["fonction_entreprise_code"]) &&
        !empty($_POST["sexe"])
    ) {
        $employee = new Employee(
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['phoneNumber'],
            $_POST['cin'],
            $_POST['date_embauche'],
            $_POST['departement'],
            $_POST['post'],
            $_POST['unite'],
            $_POST['fonction_entreprise_code'],
            $_POST['sexe'],





        );

        $e = new employeeCRUD();

        $e->addEmployee($employee);


        var_dump("employee added successfully");
        header('location: listEmployees.php');
    } else {
        $error = "Missing information";
    }
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>First delivery</title>
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
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->


            </a>



            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Add Employee</h2>


                </div>
            </div>
        </div>
    </div><!-- End Page Header -->

    <body>
        <button><a href="listEmployees.php">Retour à la liste des employees</a></button>
        <hr>

        <div id="error">
            <?php echo $error; ?>
        </div>
        <script>
            function validateForm() {

                console.log("POST", document.forms["myForm"])

                let Y = document.forms["myForm"]["firstName"].value;
                if (Y == "") {
                    alert("First name must be filled out");
                    return false;
                }
                let w = document.forms["myForm"]["lastName"].value;
                if (w == "") {
                    alert("Last name must be filled out");
                    return false;
                }
                let Z = document.forms["myForm"]["phoneNumber"].value;
                if (Z == "") {
                    alert("Phone number must be filled out");
                    return false;
                }
                let R = document.forms["myForm"]["cin"].value;
                if (R == "") {
                    alert("Phone number must be filled out");
                    return false;
                }

            }
        </script>
        <style>
            table {
                background-color: white;
                margin: 0 auto;
                /* Centers the table horizontally */
                width: 80%;
                /* Sets the width of the table */
                max-width: 800px;
                /* Sets the maximum width of the table */
                border-collapse: collapse;
                /* Collapses the borders between table cells */
            }

            td {
                padding: 10px;
                /* Adds padding around the table cells */
                text-align: left;
                /* Aligns the text to the left */
            }

            label {
                color: black;
                font-weight: bold;
                /* Makes the label text bold */
            }
        </style>
        <form name="myForm" action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td>
                        <label for="firstName">First Name:</label>
                    </td>
                    <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastName">Last Name:</label>
                    </td>
                    <td>
                        <input type="text" name="lastName" id="lastName">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="phoneNumber">Phone number:</label>
                    </td>
                    <td>
                        <input type="text" name="phoneNumber" id="phoneNumber">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cin">Cin :</label>
                    </td>
                    <td>
                        <input type="text" name="cin" id="cin">



                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="date_embauche">Date embauche:</label>
                    </td>
                    <td>
                        <input type="date" name="date_embauche" id="date_embauche">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="departement">Département:</label>
                    </td>
                    <td>
                        <select name="departement" id="departement">
                            <option></option>
                            <?php
                            foreach ($list as $item) {
                                echo '<option value=' . $item['departement'] . '>' . $item['departement'] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="post">Post:</label>
                    </td>
                    <td>
                        <input type="text" name="post" id="post">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="unite">Unité:</label>
                    </td>
                    <td>
                        <select name="unite" id="unite">
                            <option value="centrale">Centrale</option>
                            <option value="Ben arous">Ben arous</option>
                            <option value="Bizerte">Bizerte</option>
                            <option value="Capbon">Capbon</option>
                            <option value="Gabes">Gabes</option>
                            <option value="Gafsa">Gafsa</option>
                            <option value="Kairouane">Kairouane</option>
                            <option value="Mahdia">Mahdia</option>
                            <option value="Manouba">Manouba</option>
                            <option value="Madnine">Madnine</option>
                            <option value="Norsouest">Norsouest</option>
                            <option value="Sfax">Sfax</option>
                            <option value="Sidi bouzid">Sidi bouzid</option>
                            <option value="Sousse">Sousse</option>
                            <option value="Tunis">Tunis</option>

                        </select>

                    </td>

                </tr>
                <tr>
                    <td>
                        <label for="fonction_entreprise_code">Fonction entreprise code:</label>
                    </td>
                    <td>
                        <input type="text" name="fonction_entreprise_code" id="fonction_entreprise_code">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexe">Sexe:</label>
                    </td>
                    <td>



                        <select name="sexe" id="sexe">
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                            <option value="Autre">Autre</option>

                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </td>
                </tr>
                <tr>



                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer">
                    </td>
                    <td>
                        <input type="reset" value="Annuler">
                    </td>
                </tr>
            </table>
        </form>
    </body>

</html><!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>ELITE</span></strong>.
            All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">ELITE</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- <div id="preloader">
    <div class="line"></div>
</div> -->

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