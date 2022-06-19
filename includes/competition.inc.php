<?php

if (isset($_POST['submit'])){
	
	include_once '../dbh.php';
	
	$competitionname = mysqli_real_escape_string($conn, $_POST['competitionname']);
	$competitiontype = mysqli_real_escape_string($conn, $_POST['competitiontype']);


	
		if (empty($competitionname) || empty($competitiontype)) {
			
	
			
		
		}
			$sql = "INSERT INTO competitions (competitionname, competitiontype) VALUES ('$competitionname', '$competitiontype')";
			$result = mysqli_query($conn, $sql);
			header("Location: ../loggedin/addcompetition.php?competitionadd=success");
		exit();		
				}
			
		
	
	
else{
	header("Location: ../loggedin/addcompetition.php?competitionadd=error");
	exit();
}


 
