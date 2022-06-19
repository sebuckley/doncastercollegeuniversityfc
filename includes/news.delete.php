<?php  

	if (isset($_POST['delete'])){
	
	include_once '../dbh.php';

	$NewsID =  $_POST['NewsID']);

	
	$sql = mysql_query("DELETE FROM news WHERE NewsID='$NewsID'");
			
		if(mysqli_query($conn, $sql))
		header("Location: ../loggedin/createplayer.php?news=deleted");
		exit();		
				}
			
		
	
	
else{
	header("Location: ../loggedin/createplayer.php?news=nothinghappened");
	exit();
}