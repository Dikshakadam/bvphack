 <?php
 $server="localhost";
 $user="root";
 $password="123456";
 $database="bvpcloud";

 $link=mysql_connect($server,$user,$password) or die("the connection is terminated please check me!".mysql_error()); mysql_select_db($database,$link);
 ?>
