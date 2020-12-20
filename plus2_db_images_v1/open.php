<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
include("include/config.php");
error_reporting(0);
 $_GET['da'];


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body background="33.png">

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
$date= $_GET['da'];
$dat=$_GET['dat'];
echo $date;
if($stmt = $connection->query("SELECT * FROM $date where username='$date' and dates='$dat';"))
{

  echo "No of records : ".$stmt->num_rows."<br>";

  echo "<table class='table my_table'>
<tr class='info'> <th>Image</th>
					<th>Name</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Lost Dates</th>
					<th>Extrs Details</th>
					</tr>";
while ($row = $stmt->fetch_assoc()) {
echo "<tr><td><img src=images/$row[img] class='rounded-circle' alt='$row[img]'></td>
		<td>$row[name]</td>
		<td>$row[age]</td>
		<td>$row[gender]</td>
		<td>$row[dates]</td>
		<td>$row[post]</td>
</tr>";
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