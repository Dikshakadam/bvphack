
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
if($result)
{
header ("location: dashS.html");
}else{echo "login failed";}
?>


