<?php
        // Connect to database server
        mysql_connect("localhost", "root", "123456") or die (mysql_error ());

        // Select database
        mysql_select_db("bvpcloud") or die(mysql_error());

        // SQL query
        $strSQL = "SELECT * FROM issue";

        // Execute the query (the recordset $rs contains the result)
        $row = mysql_query($strSQL);

        // Loop the recordset $rs
        // Each row will be made into an array ($row) using mysql_fetch_array
   echo $row['book1']. "<br />"; echo $row['book2']. "<br />";
           // Write the value of the column FirstName (which is now in the array $row)
          echo $row['book3'] . "<br />"; 
        // Close the database connection
        mysql_close();
        ?>

