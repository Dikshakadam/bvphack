<?php

$name = $_POST['NAME'];
$rollno = $_POST['ROLLNO'];
$marks = $_POST['MARKS'];


$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "bvcoecloud";

$conn = new mysqli($host, $user, $pass, $dbname);
$query = "INSERT INTO students  VALUES ('".$name."','".$rollno."','"
         .$marks."')";
$result = $conn->query($query);
if($result){
echo "insertion successfull";
}else{
echo "Could not insert.";
}

?>

