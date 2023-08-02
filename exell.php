<?php

 
 //export table data to excel
 
$dsn = "mysql:host=localhost;dbname=aziz";
$username = "root";
$password = "";
$output = '';
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $output = "";
         
        $output .= '<table class="table table-bordered" border="1">  
                    <tr>  
                          <th scope="col">Index</th>
                          <th scope="col"> ID</th>
                          <th scope="col"> first nAME</th>
                          <th scope="col"> last Name</th>
                          <th scope="col">phone Number</th>
                          
                       



                    </tr>';
             
   $sql = "SELECT * from employee ORDER BY id DESC";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);   
        
foreach($data as $key=>$value){
 
    $output .= '<tr>  
                         <td>'.($key+1).'</td>   
                         <td>'.$value['ID'].'</td> 
                         <td>'.$value['firstName'].'</td>  
                         <td>'.$value['lastName'].'</td>
                         <td>'.$value['phoneNumber'].'</td>   
                        
                         
 
   
                          
                    </tr>';  
        }
          
        $output .= '</table>';
        
        $filename = "eunoia_data_user_export".date('Ymd') . ".xls";         
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");  
        echo $output;
        
?>