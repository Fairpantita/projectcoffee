<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeedb";


date_default_timezone_set('Asia/Bangkok');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$n_order  = $_POST['name'];
$s_order = $_POST['sweet'];
$t_order = $_POST['time'];



$shoptb_id  = $_POST['name']+1;
$crm_status = $_POST['sweet'];
$crm_date = date('Y-m-d');
$crm_time = date('H:i:s');



$sql = "INSERT INTO ordertb (name_order, sweet_order, time_order)
VALUES ('$n_order', '$s_order', '$t_order')";






if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql1 = "INSERT INTO crm (crm_id, shoptb_id, crm_status, crm_date) 
VALUES (NULL, '$shoptb_id', '$crm_status', '$crm_date')";
$conn->query($sql1);




$conn->close();
?>