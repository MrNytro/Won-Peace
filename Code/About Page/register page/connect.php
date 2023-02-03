<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "wptemp1");
// Check for connection error
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get the form data
$Fname = $_POST['Fname'];
$Phone = $_POST['Phone'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$Height = $_POST['Height'];
$RR_Count = $_POST['RR_Count'];
$v_nv = $_POST['v_nv'];
$allergies = $_POST['allergies'];
// Insert the data into the Customer table
$query = "INSERT INTO Customer (Fname, Phone, Sex, Age, Height, RR_Count, v_nv,Cust_ID) 
    VALUES ('$Fname', '$Phone', '$Sex', '$Age', '$Height', '$RR_Count', '$v_nv', 1)";
mysqli_query($conn, $query);
$Cust_ID = 1;
// Calculate the Calorie_ID
if ($Sex == "Male") {
    $Calorie_ID = -5 * $Age + 32.875 * $Height - 453;
} else {
    $Calorie_ID = -5 * $Age + 29.475 * $Height - 446;
}
// Constraint for Calorie_ID
if ($Calorie_ID < 1125) {
    $Calorie_ID = 1000;
} else if ($Calorie_ID >= 1125 && $Calorie_ID < 1375) {
    $Calorie_ID = 1250;
} else if ($Calorie_ID >= 1375 && $Calorie_ID < 1625) {
    $Calorie_ID = 1500;
} else if ($Calorie_ID >= 1625 && $Calorie_ID < 1875) {
    $Calorie_ID = 1750;
} else if ($Calorie_ID >= 1875) {
    $Calorie_ID = 2000;
}
// Update the Calorie_ID in the Customer table
$query = "UPDATE Customer SET Calorie_ID = '$Calorie_ID' WHERE Cust_ID = '$Cust_ID'";
mysqli_query($conn, $query);
// Insert the allergies into the Allergy table
if (!empty($allergies)) {
    foreach ($allergies as $allergy) {
        $query = "INSERT INTO customer_allergy (Cust_ID, Allergy_ID) VALUES ('$Cust_ID', '$allergy')";
        mysqli_query($conn, $query);
    }
}
// Close the connection
mysqli_close($conn);
// Redirect to the dashboard
header("Location: http://localhost/WP-NOLOG/about%20page/register%20page/dashboard/index-dashboard.php");
exit;
?>