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
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<head>
    
<title> Welcome</title>
<style>
.mySlides {

height:360px;

}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2C5197 ;
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
    
<iframe width="1000" height="315" src= "https://www.youtube.com/embed/sCCM5uFVaPg?autoplay=1 " frameborder="0" allowfullscreen ></iframe>



   

    <p>
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
 <section class="w3-container w3-center w3-content" style="max-width:600px">
             <h1 ><span style="color:#9955bb">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></b>. <span style="color:#9955bb">Enter  a missing child Data or upload a found Child Help Others .</span></h1>
    
    <div>
        <p align='center'> <h1 class="w3-opacity"><span style="color:#9955bb">Missing Children</span></h1> </p>
  </section>

    <section class="w3-container w3-center w3-content" style="max-width:600px">
  <p > <h3> <b><span style="color:#9955bb">“The sorrow we feel when we lose a loved one is the price we pay to have had them in our lives.”
― Rob Liano
.</span>
"</b></h3>
.</p>
</section>
<?php
    ?>
    </div>
    
    <p>
       <br>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <footer class="footer" >
  <p class="w3-medium">
  Designed and programmed by <a href="about.php" target="_blank"> Saba Siddiqua </a>
  </p>
</footer>

</center>
</body>
</html>