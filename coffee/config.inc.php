<meta charset="utf-8">
<?PHP  

$serverName = "localhost"; 
$userName = "root";  
$userPassword = "";  
$dbName = "coffeedb"; // ชื่อฐานข้อมูล  
 

 $conn = new mysqli($serverName,$userName,$userPassword,$dbName);  
 
 
 date_default_timezone_set('Asia/Bangkok');
 
 mysqli_set_charset($conn,"utf8");


 
 if ($conn->connect_errno) { 
  
  echo $conn->connect_error;  
  
   exit;  }  else { 
 
 }

  ?> 
  