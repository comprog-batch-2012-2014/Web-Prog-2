<?php 
	include "utilities.php";

	$id = $_GET['id'];
	
	delete($id);
	header("location:backEnd.php");

 ?>
