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

if($stmt = $connection->query("SELECT * FROM saba8")){

  echo "No of records : ".$stmt->num_rows."<br>";

  echo "<table class='table my_table'>
<tr class='info'> <th> Image </th><th>Name</th><th>ID</th><th>Price</th></tr>";
while ($row = $stmt->fetch_assoc()) {
echo "<tr><td><img src=images/$row[img] class='rounded-circle' alt='$row[img]'></td>
<td>$row[post]</td></tr>";
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