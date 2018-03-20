<?php
$con=mysqli_connect("localhost","root","123456","bvpcloud");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM signup WHERE username='".$username."'";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
 echo $row['username'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';
 echo ("password").'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'; echo $row['name'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';
echo $row['email'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp';      // Write the value of the column FirstName (which is now in the array $row)
          echo $row['mobile'] . "<br />";}
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
