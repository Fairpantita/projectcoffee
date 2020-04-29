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

$namess=$_POST['names'];
$phones = $_POST['phone'];
$sexs = $_POST['sex'];
$members = $_POST['member'];
$statuss = $_POST['stat'];
$number=$_POST['orderid'];


for ($i = 1;  $i <= $number;  $i++) {
    $sql = "INSERT INTO inform (names, phone, sex, member, stat, orderid)
    VALUES ('$namess', '$phones', '$sexs', '$members', '$statuss','$number' )";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
    




// $sql = "INSERT INTO inform (phone, sex, member, stat, orderid)
// VALUES ('$phones', '$sexs', '$members', '$statuss','$number' )";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();

header("Location: pc.html");
?>