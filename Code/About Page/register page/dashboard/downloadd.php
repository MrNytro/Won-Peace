<?php 
    $host = 'localhost'; 
    $user = 'root'; 
    $pass = ''; 
    $db = 'wptemp1'; 
    $conn = mysqli_connect($host, $user, $pass, $db); 
    $sql = "SELECT Food_Name, Servings, Calorie_per_100g
    FROM Food
    WHERE Times = 'D' AND Calorie_ID = (SELECT Calorie_ID FROM Customer WHERE Cust_ID = 1) 
    AND Allergy_ID NOT IN (SELECT Allergy_ID FROM customer_allergy WHERE Cust_ID = 1)
    AND (CASE 
        WHEN (SELECT v_nv FROM Customer WHERE Cust_ID = 1) = 1 THEN v_nv != 2
        ELSE 1=1
    END)"; 
    $result = mysqli_query($conn, $sql); 
    $columnHeader = ''; 
    $columnHeader = "Food Name" . "\t" . "Servings" . "\t" . "Calorie per 100g"; 
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
    header("Content-Disposition: attachment; filename=Food_Report_Dinner.xls"); 
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
    echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
?>