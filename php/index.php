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

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
<style>
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: gray;
  padding: 8px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}


.button1 {
  background-color: #B4CDCD; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
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


</style>

</head>
<body background="b.png"> <center>


<h1  class="w3-opacity"> <span style="color:#4169e1">Lost Child Entry  </h1>

    <div class="page-header">

    <p>
       <div class="scrollmenu"><center>
  <a href="http://localhost/php/welcome.php" >Home</a>
  <a href="http://localhost/php/index.php" >Entry </a>
  <a href="http://localhost/plus2_db_images_v1/#" >View All Posts </a>
  <a href="http://localhost/plus2_db_images_v1/my_post.php">View My Posts </a>
  <a href="http://localhost/plus2_db_images_v1/my_post.php" >Edit </a>
  <a href="http://localhost/plus2_db_images_v1/my_post.php">Delete </a>
  
  <a href="http://localhost/php/about.php" >About Us</a>
  <a href="http://localhost/php/logout.php" > Log Out</a>
  </center>
</div>
<h2><span style="color:#4169e1">Create your Posts Here </h2>

<form action="details.php" method="post">
  

<button class="button button1" color='green'>Add Child Data </button> 

</form>

  <?php
  $link ="http://localhost/php/welcome.php";
  echo "<a href='".$link."'>GO BACK</a>";
  
  ?>
</center>
 <footer class="footer" >
  <p class="w3-medium">
  Designed and programmed by <a href="about.php" target="_blank"> Saba Siddiqui</a>
  </p>
</footer>

</body>
</html>
