<?php 
session_start();
	$conn=mysqli_connect("localhost","root","","theicecorner");
	$id=$_GET['id'];	
	mysqli_query($conn,"delete from signup where id='".$id."'"); 
	header('location:user.php');


?>