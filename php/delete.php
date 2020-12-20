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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<head><title> Delete Record </title>
<style>
   .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2C5197;
   color: pink;
   text-align: center;
}
</style>
  <style>
* {
  box-sizing: border-box;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
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

div.scrollmenu a:hover {
  background-color: blue;
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

</head>
<body background="b.png"> <center>
   <h1  class="w3-opacity"> Lost Child Portal </h1>
 <div class="scrollmenu">
  <a href="welcome.php">Home</a>
  <a href="index.php">Entry </a>
  <a href="http://localhost/plus2_db_images_v1/#">View All Posts </a>
  <a href="http://localhost/plus2_db_images_v1/my_post.php">View My Posts </a>
  <a href="http://localhost/plus2_db_images_v1/#" >Edit </a>
  <a href="http://localhost/plus2_db_images_v1/#">Delete </a>
  
  <a href="http://localhost/php/about.php">About Us</a>
  <a href="logout.php"> Log Out</a>
</div>

<?php
include("conn.php");
 $name=$_SESSION["username"];
$conn = new mysqli("localhost", "root", "", "child");
$dates=$_GET['da'];
$query="delete from $name where dates='$dates';";
$query_1="delete from global where dates='$dates';";
 $data=mysqli_query($conn,$query);
   
   $data=mysqli_query($conn,$query_1);
   
if($data)
{
   echo "<br><br><br>";
   echo "<h2><font color='black'>.........Record deleted successfully .........<br><br><br></h2>";
    echo "<h2>to check altered  record . <a href='http://localhost/plus2_db_images_v1/#'><b>Click Here</b></a></h2>";
}
else
{
   echo"<font color'red> unsuccessfull !!!  Data is not deleted ";
}


?>
</center>
 <footer class="footer" >
  <p class="w3-medium">
  Designed and programmed by <a href="http://localhost/php/about.php" target="_blank"> Saba Siddiqua </a>
  </p>
</footer>

</body>
</html>