<?php
include '../Controller/employeeCRUD.php';

$employeeController = new employeeCRUD();
$employeeList = $employeeController->getEmployee();
$data = [];
$labels = ["id", "Prenom", "Nom", "Numero de tel"];
  foreach ($employeeList as $employee) 
{
    $data[] = $employee;
}

$filename = 'employee-list.csv';
$handle = fopen($filename, 'w');
fputcsv($handle, $labels);
  foreach ($data as $row)
{

    fputcsv($handle, $row);
}

fclose($handle);
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="employee-list.csv"');
header('Content-Length: ' . filesize($filename));
readfile($filename);
?>
