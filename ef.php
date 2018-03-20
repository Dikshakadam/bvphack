<?php


$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "try";

$conn = new mysqli($host, $user, $pass, $dbname);
$query = "INSERT INTO abcd2 VALUES('2','ohhlalaa')";
$result = $conn->query($query);
if($result){
echo "book added";
}else{
echo "book not added";
}

?>


