<?php
        // Connect to database server
        mysql_connect("localhost", "root", "123456") or die (mysql_error ());

        // Select database
        mysql_select_db("bvpcloud") or die(mysql_error());

        // SQL query
        $strSQL = "SELECT * FROM signup";
session_start();

$sql = "SELECT name, email FROM signup WHERE username = '" . $_SESSION['username'] . "'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
echo "Hello, " ;echo $row['name'] . " (" . $row['email'] . ").";
mysql_close();
?>



