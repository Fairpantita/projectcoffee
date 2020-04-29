<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "coffeedb"; 

date_default_timezone_set('Asia/Bangkok');
$conn = new mysqli($serverName,$userName,$userPassword,$dbName);

mysqli_set_charset($conn,"utf8");
if ($conn->connect_errno) {
echo $conn->connect_error;
exit;
} else {

}
?>