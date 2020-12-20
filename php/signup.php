<?php


include_once dirname(__FILE__) .  '\conn.php';


$dates=$_GET['date'];
	
	 $data=$_GET['posts'];
	$sql="insert into entry (dates,post)values('$dates','$data'));";
	$result= mysqli_query($conn,$sql);
	 
	
header("Location: ../add.php?signup=success");