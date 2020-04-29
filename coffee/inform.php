<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffeedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$phones = $_POST['phone'];
$sexs = $_POST['sex'];
$members = $_POST['member'];
$statuss = $_POST['stat'];




$sql = "INSERT INTO inform (phone, sex, member, stat)
VALUES ('$phones', '$sexs', '$members', '$statuss')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>