<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="b.jpg">

</body>
</html>
<?Php
echo "<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->

    <title>plus2net.com Displaying Images from database  </title>";
require "templates/head.php";
echo "<style>
.my_table > tbody > tr > td {
vertical-align: middle;
}
.my_table {width:500px;}
</style>
</head><body>";

require "templates/top.php";


require "include/config.php";
////////////
echo "<div class='row'>
<div class='col-md-11 offset-md-1'>";
$name=$_SESSION["username"];

if($stmt = $connection->query("SELECT * FROM $name")){

  echo "No of records : ".$stmt->num_rows."<br>";

  echo "<table class='table my_table'>
<tr class='info'> <th> Date </th><th>Image</th><th>Post</th><th>Edit</th><th>Delete</th></tr>";
while ($row = $stmt->fetch_assoc()) {
echo "<tr><td>$row[dates]</td><td><img src=images/$row[img] class='rounded-circle' alt='$row[img]'></td>
<td>$row[post]</td><td> <a href='http://localhost/php/update.php?da=$row[dates]&po=$row[post]&ig=$row[img]'> Edit </td><td><a href='http://localhost/php/delete.php?da=$row[dates]'>Delete</td></tr>";
  }
echo "</table>";
}else{
echo $connection->error;
}
echo "</div></div>";

require "templates/bottom.php";	
?>

<script>
$(document).ready(function() {
/////////// form submission//

////
	
})
</script>
</body>
</html>