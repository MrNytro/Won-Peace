<?php 
    $host = 'localhost'; 
    $user = 'root'; 
    $pass = ''; 
    $db = 'wptemp1'; 
    $conn = mysqli_connect($host, $user, $pass, $db); 
    //
    $sql = "SELECT Food_Name, recipes
    FROM common_food 
    "; 
    //
    $result = mysqli_query($conn, $sql); 
    $columnHeader = ''; 
    $columnHeader = "Food Name" . "\t" . "recipes"; 
    $setData = ''; 
    while ($rec = mysqli_fetch_row($result)) { 
        $rowData = ''; 
        foreach ($rec as $value) { 
            $value = '"' . $value . '"' . "\t"; 
            $rowData .= $value; 
        } 
        $setData .= trim($rowData) . "\n"; 
    } 
    header("Content-type: application/octet-stream"); 
    header("Content-Disposition: attachment; filename=Common_food.xls"); 
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
    
    echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
?>