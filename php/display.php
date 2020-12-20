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

// Username is root 
$user = 'root'; 
$password = ''; 

// Database name is gfg 
$database = 'child'; 

// Server is localhost with 
// port number 3308 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user, 
        $password, $database); 

// Checking for connections 
if ($mysqli->connect_error) { 
  die('Connect Error (' . 
  $mysqli->connect_errno . ') '. 
  $mysqli->connect_error); 
} 
$name=$_SESSION["username"];

// SQL query to select data from database 
$sql = "SELECT * FROM $name  "; 
$result = $mysqli->query($sql); 
$mysqli->close(); 
?> 

<!DOCTYPE html> 
<html lang="en"> 

<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div.scrollmenu {
  background-color: #333;
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
  background-color: #777;
}
</style>
</head>

<style> 
    table { 
      margin: 1 auto; 
      font-size: large; 
      border: 0.3px solid black; 
    } 

    h1 { 
      text-align: center; 
      color: #006600; 
      font-size: xx-large; 
      font-family: 'Gill Sans', 'Gill Sans MT', 
      ' Calibri', 'Trebuchet MS', 'sans-serif'; 
    } 

    td { 
      background-color: #C1CDCD; 
      border: 1px solid black; 
    } 

    th, 
    td { 
      font-weight: bold; 
      border: 1px solid black; 
      padding: 10px; 
      text-align: center; 
    } 

    td { 
      font-weight: lighter; 
    } 
  </style> 
</head> 

<body> 
  <body style="background-color: #C1CDCD"><center>
  <h1  class="w3-opacity"> Lost Child Data </h1>

<div class="scrollmenu">
  <a href="welcome.php">Home</a>
  <a href="index.php">Entry  </a>
  <a href="display.php">View </a>
  <a href="display.php" >Edit </a>
  <a href="display.php">Delete </a>
  
  
  <a href="about.php">About Us</a>
  <a href="logout.php"> Log Out</a>
</div>
<br>
</br>
  <section> 
    
    <table> 
      <tr> 
        <th>Date</th> 
        <th>Data</th> 
        <th>Image</th>
        <th>Edit</th>
    <th>Delete</th> 
         
      </tr> 
      <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
      <?php // LOOP TILL END OF DATA 
        while($rows=$result->fetch_assoc()) 
        { 
      ?> 
      <tr>
    <td><?php echo $rows['dates']; ?></td>
    <td><?php echo $rows['post']; ?></td>
    <td><?php echo "<a href='open.php?da=$rows[dates]'>"; ?> open</a></td>
    <td><?php echo "<a href='update.php?da=$rows[dates]&po=$rows[post]&ig=$rows[img]'>"; ?>Edit</td>
    <td><?php echo "<a href='delete.php?da=$rows[dates]'>"; ?> Delete</a></td>
  </
  </tr> 
      <?php 
        } 
      ?> 
    </table> 
  </section> 
</body> 

</html> 
