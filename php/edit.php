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
<link rel="stylesheet"  
href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"   
integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w"   
crossorigin="anonymous">
<head>
   <style>
      
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
  background-color: black;
}
</style>
  <style>
* {
  box-sizing: border-box;
}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */

}
</style>

   </head>
<body background="b.png"> <center>
  <h1  class="w3-opacity">Lost Child Portal </h1>
 <div class="scrollmenu">
  <a href="http://localhost/php/welcome.php">Home</a>
  <a href="http://localhost/php/index.php">Entry </a>
  <a href="http://localhost/plus2_db_images_v1/#">View All Posts </a>
  <a href="http://localhost/plus2_db_images_v1/my_post.php">View My Posts </a>
  <a href="http://localhost/plus2_db_images_v1/#" >Edit </a>
  <a href="http://localhost/plus2_db_images_v1/#">Delete </a>
  
  <a href="http://localhost/php/about.php">About Us</a>
  <a href="http://localhost/php/logout.php"> Log Out</a>
</div>
</nav>
</center>

   


<form class="pure-form pure-form-aligned" action="" method="GET">   
    <fieldset>  

      <div class="pure-group">
    <label for=""><center><h2> Child Details</h2></center> </label> 
</div><br></br>
        <div class="pure-control-group">  
            <label for="name">Full Name</label>  
            <input id="name" name="name" type="text" value="<?php echo $_GET['na']; ?>" size="40"  required>  
              
        </div>  
  
        <div class="pure-control-group">  
            <label for="age">Age</label>  
            <input id="age" type="number" value="<?php echo $_GET['age']; ?>" size="80" name="age" required>  
            <span class="pure-form-message-inline">This is a required field.</span> 
        </div>  
        <div class="pure-control-group">

          <label for="gender">Select Gender</label>
          <label for="cb" class="pure-radio" name="gender" id="male" value="male"> Male 
                <input id="cb" type="radio" name="gender" id="male" value="male"required>   
            </label>  
            <label for="cb" class="pure-radio" name="gender" id="female" value="female"> Female 
                <input id="cb" type="radio" name="gender" id="female" value="female" required>  
            </label>  <span class="pure-form-message-inline">This is a required field.</span> 
  <br></br> 
        </div>
        <div class="pure-control-group">  
            <label for="">Entry Date/Date Lost </label>  
            <input id="date" type="text" value="<?php echo $_GET['da']; ?>" size="40" name="date" readonly>  
            
        </div>  
        <div class="pure-control-group">

      
  
        <div class="pure-control-group">  
            <label for="Details">Enter Details</label>  
            <textarea style="width:450px;" class="pure-control-group"   rows=10 cols="30" name="data" >
              <?php echo $_GET['po']; ?>
            </textarea>
        </div>  
  
        <div class="pure-control-group">  
            <label for="foo" >Select image to upload:</label>  
            
            
            <input class="pure-control-group"  type="file" name="fileToUpload" id="fileToUpload" required> <span class="pure-form-message-inline">This is a required field.</span> 
        </div>  
  
        <div class="pure-controls"> 
          <input type="submit" name="submit" class="pure-button pure-button-primary" value="Update">
         
  
           
            
            
        </div>  
    </fieldset>
  
</form>  

   <?php
   $name=$_SESSION["username"];
$link = mysqli_connect("localhost", "root", "", "child");
   if($_GET['submit'])
   {
       $na=$_GET['name'];
       $age=$_GET['age'];
       $gender=$_GET['gender'];
        $dates= $_GET['date'];
       $post=$_GET['data'];
      
      
      
      
      $img=$_GET['fileToUpload'];

      $query="UPDATE $name set name='$na',age='$age',gender='$gender',dates='$dates',post='$post',img='$img' where dates='$dates';";
      $query_g="UPDATE global set name='$na',dates='$dates', img='$img' where dates='$dates';";
      $data=mysqli_query($link,$query);
      $data_1=mysqli_query($link,$query_g);
      if($data && $data_1){
         echo "Record updated successfully<br>";
         echo "to check updated record . <a href='http://localhost/plus2_db_images_v1/my_post.php'>Click Here</a>";

      }
      else
      {
         echo " not updated";
      }

   }
   else{
      echo "not pressed";
   }
   
   echo "<br><br><br><a href='http://localhost/plus2_db_images_v1/my_post.php'>Back</a>";
   ?>

   </body>
</html>