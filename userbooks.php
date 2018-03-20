<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '123456';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass); $username=$_POST['USERNAME'];
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql ='SELECT * FROM issue WHERE username="shivi2"';
   mysql_select_db('bvpcloud');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "USERNAME :{$row[0]} <br> ".
        "BOOKS ISSUED TO USER :<br> {$row[1]} <br> ".
         "{$row[2]} <br> ".
         "{$row[3]} <br> ".
         "--------------------------------<br>";
   }
   echo "Fetched data successfully\n";
   mysql_close($conn);
?>

