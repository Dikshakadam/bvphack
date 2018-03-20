<?php

$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];

$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "bvpcloud";

$conn = new mysqli($host, $user ,$pass, $dbname);
$query = "SELECT name from signup where username='"
	.$username."' and password='".$password."'";
$result = $conn->query($query);
if($result->num_rows > 0){
$query1 = "SELECT name, sp, image from products";
$result1 = $conn->query($query1);
if($result1->num_rows > 0){ 
$finaldata = array();
while($row1 = $result1->fetch_assoc()){ 
$name = $row1['name'];
$sp = $row1['sp'];
$image = $row1['image'];
$pdata = array("Name"=>$name, "SP"=>$sp, "Image"=>$image);
array_push($finaldata, $pdata);
}
$output = array("status"=>true, "message"=>"Auth success",
	  "data"=>$finaldata);
echo json_encode($output);
}else{ 
$status = true;
$output = array("status"=>$status, 
		"message"=>"Auth success. But no products");
echo json_encode($output);
}
}else{ 
$status = false;
$output = array("status"=>$status, "message"=>"Auth failed");
echo json_encode($output);
}

?>
