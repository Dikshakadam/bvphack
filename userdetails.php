<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '123456';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass); $username=$_POST['USERNAME'];
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql ='SELECT * FROM signup WHERE username="shivi2"';
   mysql_select_db('bvpcloud');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "USERNAME :{$row[0]} <br> ".
         "PASSWORD: ***** <br> ".
        "NAME :{$row[2]} <br> ".
         "EMAIL: {$row[3]} <br> ".
         "MOBILE: {$row[4]} <br> ".
         "--------------------------------<br>";
   }
   echo "Fetched data successfully\n";
   mysql_close($conn);
?>
