<?php

include '../Controller/reclamationCRUD.php';

if (isset($_POST['searchTerm'])) {
    $employeehistory = new reclamationC(); 
    $results = $employeehistory->chercherEmpl($_POST['searchTerm']);
   
    echo json_encode($results);
}
?>