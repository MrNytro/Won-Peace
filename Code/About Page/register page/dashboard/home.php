<?php

//connect to the database
$conn = mysqli_connect("localhost", "root", "", "wptemp1");

//check for connection error
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//write your SQL query here
$sql1 = "DELETE FROM customer";
$sql2 = "DELETE FROM customer_allergy";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

//redirect the user to the home page
header("location: http://localhost/WP-NOLOG/about%20page/index-aboutpage.php");
exit();

?>
