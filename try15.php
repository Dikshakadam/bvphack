<?php
        // Connect to database server
        mysql_connect("localhost", "root", "123456") or die (mysql_error ());

        // Select database
        mysql_select_db("bvpcloud") or die(mysql_error());

        // SQL query
        $strSQL = "SELECT * FROM signup";

        // Execute the query (the recordset $rs contains the result)
        $rs = mysql_query($strSQL);

        // Loop the recordset $rs
        // Each row will be made into an array ($row) using mysql_fetch_array
        while($row = mysql_fetch_array($rs)) {
 echo $row['username'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';
 echo ("password").'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'; echo $row['name'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';
echo $row['email'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';      // Write the value of the column FirstName (which is now in the array $row)
          echo $row['mobile'] . "<br />";}

mysql_close();
?>

