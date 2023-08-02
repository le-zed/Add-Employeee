<?php

include '../Controller/reclamationCRUD.php';

if (isset($_POST['searchTerm'])) {
    $employee = new reclamationC(); 
    $results = $employee->chercheremp($_POST['searchTerm']);
   
    echo json_encode($results);
}
?>