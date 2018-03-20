
<?php

$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];

$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "bvpcloud";

$conn = new mysqli($host, $user ,$pass, $dbname);
$query = "SELECT * FROM admin WHERE username='admin' and password='admin'";
$result = $conn->query($query);
if($result)
{
header ('location: dashA.html');
}else{echo "login failed";}
?>


