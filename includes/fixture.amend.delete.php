<?php


	
if (isset($_POST['update'])){
	include_once '../dbh.php';

	$sql = "UPDATE fixtures SET hometeamscore='$_POST[hometeamscore]', awayteamscore='$_POST[awayteamscore]', kotime='$_POST[kotime]' WHERE fixtureid='$_POST[fixtureid]';";
	

		if ($conn->query($sql) === TRUE) {
		  header("Location: ../loggedin/fixtures.result.php?fixture=editsuccess");
				exit();	
		}else {
			echo "Error updating record: " . $conn->error;
		}
	}
	
if (isset($_POST['delete'])){
	include_once '../dbh.php';

	$sql = "DELETE FROM fixtures WHERE fixtureid='$_POST[fixtureid]';";	

		if ($conn->query($sql) === TRUE) {
		  header("Location: ../loggedin/fixtures.result.php?fixture=delete-success");
				exit();	
		}else {
			echo "Delete Error " . $conn->error;
		}
	}
	?>