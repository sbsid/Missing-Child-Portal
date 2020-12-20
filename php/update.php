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
include("conn.php");
error_reporting(0);
 $_GET['da'];
 $_GET['po'];

?>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<head>
   <style>
      .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: pink;
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
<body background="diary.jpg"> <center>
	<h1  class="w3-opacity"> MY DIARY </h1>
 <nav class="w3-bar w3-pink">
  <a href="http://localhost/php/access/welcome.php" class="w3-button w3-bar-item">Home</a>
  <a href="http://localhost/php/index.php" class="w3-button w3-bar-item">New </a>
  <a href="http://localhost/php/display.php" class="w3-button w3-bar-item">View </a>
  <a href="http://localhost/php/display.php" class="w3-button w3-bar-item">Edit </a>
  <a href="http://localhost/php/display.php" class="w3-button w3-bar-item">Delete </a>
  
  
  <a href="http://localhost/php/about.php" class="w3-button w3-bar-item">About Us</a>
   <a href="http://localhost/php/access/logout.php" class="w3-button w3-bar-item"> Log Out</a>
</nav>

   <form action="" method="GET">
       
      <b>Date</b> <br><input type="text" name="dates" value="<?php echo $_GET['da']; ?>" readonly><br><b>
         Post</b><br>
       <textarea rows="5" cols="50" name="post"><?php echo $_GET['po']; ?> </textarea>
      <br><br>
      <input type="submit" name="submit" value="Update">
   </form>

   <?php
   $name=$_SESSION["username"];

   if($_GET['submit'])
   {
      $id=$_GET['id'];
       $dates= $_GET['dates'];
      $post=$_GET['post'];
      $query="update $name set dates='$dates',post='$post' where dates='$dates'";
      $data=mysqli_query($conn,$query);
      if($data){
         echo "Record updated successfully<br>";
         echo "to check updated record . <a href='display.php'>Click Here</a>";

      }
      else
      {
         echo " not updated";
      }

   }
   else{
      echo "not pressed";
   }
   $link ="http://localhost/php/display.php";
   echo "<br><br><br><a href='".$link."'>Back</a>";
   ?>
</center>
 <footer class="footer" >
  <p class="w3-medium">
  Designed and programmed by <a href="http://localhost/php/about.php" target="_blank"> Saba and Poja</a>
  </p>
</footer>

   </body>
</html>