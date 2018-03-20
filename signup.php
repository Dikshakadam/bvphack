<?php
$username = $_POST['USERNAME'];
$name = $_POST['NAME'];
$email = $_POST['EMAIL'];
$password = $_POST['PASSWORD'];
$mobile = $_POST['MOBILE'];

$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "bvpcloud";

$conn = new mysqli($host, $user, $pass, $dbname);
$query = "INSERT INTO signup VALUES ('".$username."','".$password."','".$name."','"
	 .$email."','".$mobile."')";
$result = $conn->query($query);
if($result){ 
echo "Registration successfull";
}else{ 
echo "Could not register.";
}

?>
