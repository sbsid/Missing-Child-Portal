<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<style>
	.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
  <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #000000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
div.scrollmenu {
  background-color: #2C5197;
  overflow: auto;
  white-space: nowrap;
}
div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<body background="b.png"><center>

 <h1  class="w3-opacity"> <span style="color:#FFFFFF">Lost Child Entry  </h1>

    <div class="page-header">

    <p>
       <div class="scrollmenu"><center>
  <a href="http://localhost/php/welcome.php">Home</a>
  <a href="http://localhost/php/index.php">Entry </a>
  <a href="http://localhost/plus2_db_images_v1/#">View All Posts </a>
  <a href="http://localhost/plus2_db_images_v1/#">View My Posts </a>
  <a href="http://localhost/plus2_db_images_v1/#" >Edit </a>
  <a href="http://localhost/plus2_db_images_v1/#">Delete </a>
  
  <a href="http://localhost/php/about.php">About Us</a>
  <a href="http://localhost/php/logout.php"> Log Out</a>
  </center>
</div>


 

<?php

$name=$_SESSION["username"];
// $image=basename( ["name"],".jpg");

$sql="INSERT INTO $name (username,name,age,gender,dates, post, img)

VALUES

('$name','$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[date]','$_POST[data]','$_POST[fileToUpload]')";
$con = mysqli_connect("localhost","root","","child");

$sql_qu="INSERT INTO global (username,name, dates, img)

VALUES

('$name','$_POST[name]','$_POST[date]','$_POST[fileToUpload]')";

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 
mysqli_query($con,$sql_qu);
mysqli_query($con,$sql);

 
 



echo "<font color='black'> <h2>1 record added</h2>";
echo "<br><br>";

 



	$link ="http://localhost/php/index.php";
	echo "<a href='".$link."'>GO BACK</a>";
	echo "<br><br><br><h2>to check   records . <a href='http://localhost/plus2_db_images_v1/#'>Click Here</a></h2>";

	
	mysqli_close($con)

?>
</center>
 <footer class="footer" >
  <p class="w3-medium">
  Designed and programmed by <a href="http://localhost/php/about.php" target="_blank"> Saba and Poja</a>
  </p>
</footer>

</body>

</html>