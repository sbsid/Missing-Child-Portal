<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table in Database </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
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
<body background="bg.jpg"> <center>
    <div class="wrapper">
   	<form method='GET'>
   		<br><br><br><br>
   		<h1 >name:</h1><input type="text" name="user"><br><br>
   		<input align="crnter" type="submit" name="go" value="create">
   	</form>
      <?php
         $dbServername="localhost";
$dbUsername="root";
$dbPass="";
$dbName="diary";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPass,$dbName);

         if(! $conn ) {
            die('Could not connect: ' . mysqli_error($conn));
         }
         $name=$_GET['user'];
         echo "<br><br>";
         $sql =  "CREATE TABLE $name( ".
            "dates date, ".
            "post VARCHAR(100) NOT NULL); "; 
         $retval = mysqli_query( $conn, $sql );
         
         mysqli_close($conn);
         
      ?>
   </body>
</html>