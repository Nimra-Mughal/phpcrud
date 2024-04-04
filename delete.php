<?php 
$ID=$_GET['id'];
include 'conn.php';
$query="DELETE FROM `student` where id=$ID";
mysqli_query($con,$query);
header('location:studentdata.php')

?>