<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '123456';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass); $username=$_POST['username'];
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = 'SELECT * FROM signup WHERE username='".$username."'';
   mysql_select_db('bvpcloud');
   $retval = mysql_query( $sql, $conn );
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "USERNAME :{$row[0]} <br> ".
         "PASSWORD: {$row[1]} <br> ".
        "NAME :{$row[0]} <br> ".
         "EMAIL: {$row[1]} <br> ".
         "MOBILE: {$row[2]} <br> ".
         "--------------------------------<br>";
   }
   echo "Fetched data successfully\n";
   mysql_close($conn);
?>
