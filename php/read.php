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
<head>
<style>
	td{
		padding:10px;
	}
</style>
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

<?php
include_once dirname(__FILE__) .  '\conn.php';
$name=$_SESSION["username"];

$query="SELECT*FROM $name";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

if($total !=0 ){
	?>
	<table>
		<tr>
			<td>Date</td>
			<td>      Post</td>
			
			<td>      Edit</td>
			<td>      Delete</td>
		</tr>
	




	<?php
	
	while($result = mysqli_fetch_assoc($data) ){
		echo "<tr>
			<td>".$result['dates']."</td>
			<td>".$result['post']."</td>
			</tr>
			<td><a href='update.php?da=$result[dates]&po=$result[post]'>Delete</a></td>

		";
	}
}
else{
	echo "No Posts";
}
  $link ="http://localhost/php/acce/welcome.php";
   echo "<a href='".$link."'>Back</a>";
?>
</table>
</center>
<footer class="footer" >
  <p class="w3-medium">
  Designed and programmed by <a href="http://localhost/php/about.php" target="_blank"> Saba and Poja</a>
  </p>
</footer>

</body>
</html>