<?php

// Make a MySQL Connection
mysql_connect("localhost", "root", "123456") or die(mysql_error());
mysql_select_db("try") or die(mysql_error());

$checkBox = implode(',', $_POST['Days']);

if(isset($_POST['submit']))
{       
    $query="INSERT INTO example VALUES ('" . $checkBox . "')";     

    mysql_query($query) or die (mysql_error() );

    echo "Complete";

}

?>

