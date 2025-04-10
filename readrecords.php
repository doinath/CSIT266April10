<?php
	
	include 'connect.php';
	
	if (!$connection) {
	    die('Could not connect: ' . mysqli_connect_error());
}
	
	$query = 'SELECT * from  tblvehicle; 
	-- //tbluser where tbluser.uid = tblstudent.uid';
        $resultset = mysqli_query($connection, $query);
	
	//$querybsit = 'SELECT count(*) as total from tblvehicle;
	//$resultset1 = mysqli_query($connection, $querybsit);
	//$count = mysqli_fetch_assoc($resultset1);	
	// where  = "BSIT"';
	// $resultset1 = mysqli_query($connection, $querybsit);
	// $count = mysqli_fetch_assoc($resultset1);	
		
	
?>