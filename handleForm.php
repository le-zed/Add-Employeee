<?php

$error = "";

// create employee
$employee = null;
var_dump("POST1",implode(",",$_POST));

var_dump("VAL", $_POST["sexe"],"  isset   ", isset($_POST["firstName"]) &&
isset($_POST["lastName"]) &&
isset($_POST["phoneNumber"])&&
isset($_POST["cin"]) &&
isset($_POST["date_embauche"]) &&
isset($_POST["servicee"]) &&
isset($_POST["post"]) &&
isset($_POST["unite"]) &&
isset($_POST["fonction_entreprise_code"]) &&
isset($_POST["sexe"])  );
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["phoneNumber"])&&
    isset($_POST["cin"]) &&
    isset($_POST["date_embauche"]) &&
    isset($_POST["servicee"]) &&
    isset($_POST["post"]) &&
    isset($_POST["unite"]) &&
    isset($_POST["fonction_entreprise_code"]) &&
    isset($_POST["sexe"]) 
    

) {
    var_dump("POST2",implode(",",$_POST));

    if (
        !empty($_POST["firstName"]) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["phoneNumber"])&&
        !empty($_POST["cin"])&&
        !empty($_POST["date_embauche"])&&
        !empty($_POST["servicee"])&&
        !empty($_POST["post"])&&
        !empty($_POST["unite"])&&
        !empty($_POST["fonction_entreprise_code"])&&
        !empty($_POST["sexe"])
    ) {
        $employee = new Employee(
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['phoneNumber'],
            $_POST['cin'],
            $_POST['date_embauche'],
            $_POST['servicee'],
            $_POST['post'],
            $_POST['unite'],
            $_POST['fonction_entreprise_code'],
            $_POST['sexe'],

           


        );

        $e = new employeeCRUD();

        $e->addEmployee($employee);

        var_dump("employee added successfully");
        // header('location: listEmployees.php');
    } else {

        var_dump("ERROR FORM");

        $error = "Missing information";
    }
}
else         var_dump("ERROR FORM");



?>

<!DOCTYPE html>
<html lang="en">
    <body>


    
</body>

</html>