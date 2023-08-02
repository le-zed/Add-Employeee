<?php

include '../Controller/employeeCRUD.php';
$employee = new employeeCRUD();
$employee->supprimer($_GET["ID"]);
header('location:listEmployees.php');

?>