<?php if(isset($_POST['submit'])) {
 $username=mysql_real_escape_string($_POST['username']); $hobb= $_POST['books']; if(empty($hobb))
    {
        echo("<p>You didn't select any book.</p>\n");
    }
    else
    {
      $N = count($hobb);
 	if($N>3)
	{echo ("select atmost 3 book");

	}
        
	else{echo("<p>You selected $N Books: ");
        {
            $var1=$hobb[$i];
		 $var0=$hobb[0]; $var1=$hobb[1]; $var2=$hobb[2]; 
            include ("connect.php");
            $table = "INSERT INTO issue (username, book1,book2,book3) ".
                     "VALUES ('$username', '$var0', '$var1', '$var2')";
            mysql_query($table) or die(mysql_error());
            $inserted_fid = mysql_insert_id();
            mysql_close();
        }
        echo "successfully uploaded!..";
      }}
}
else
 { echo "error please check ur code";
}
?>
