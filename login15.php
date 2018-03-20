<?php

// Connect to server and select databse.
mysql_connect("localhost", "root","123456")or die("cannot connect");
mysql_select_db("bvpcloud")or die("cannot select DB");

// username and password sent from form 
$username = $_POST['username'];
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$username = mysql_real_escape_string($username);

$sql = "SELECT * FROM signup WHERE username='$username'";

$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count = mysql_num_rows($result);

// If result matched $email and $password, table row must be 1 row
if ($result) {

    // Register $email, $password and redirect to file "report.php"
    session_register("username");
      header("Location : abcd.php");
} else {
    echo "Wrong Username or Password";
}
?>
