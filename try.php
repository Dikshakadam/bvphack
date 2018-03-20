<?php

$id = $_POST['ID'];
$name = $_POST['NAME'];

$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "try";

$conn = new mysqli($host, $user, $pass, $dbname);
$query = "INSERT INTO abcd VALUES('".$id."','".$name."')";
$result = $conn->query($query);
if($result){
echo "book added";
}else{
echo "book not added";
}

?>


