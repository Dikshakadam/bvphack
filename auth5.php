<?php $username = $_POST['USERNAME']; $password = $_POST['PASSWORD']; 
$host = "localhost"; $user = "root"; $pass = "123456"; $dbname = 
"bvpcloud"; $conn = new mysqli($host, $user ,$pass, $dbname); $query = 
"SELECT * FROM signup WHERE username='lib' and password='lib'"; $result 
= $conn->query($query); if($result) { header("Location : dashA.html");
}else{echo "login failed";}
?>

