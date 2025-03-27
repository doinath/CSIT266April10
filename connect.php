<?php 
	$connection = new mysqli('localhost', 'root','','dbf2delcastillo');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>