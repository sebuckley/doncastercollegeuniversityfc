<?php


	
if (isset($_POST['update'])){
	include_once '../dbh.php';

	$sql = "UPDATE teams SET teamname='$_POST[teamname]', teamnickname='$_POST[teamnickname]',ground='$_POST[ground]',firstline='$_POST[firstline]' ,town='$_POST[town]',postcode='$_POST[postcode]' WHERE teamid='$_POST[teamid]';";
	

		if ($conn->query($sql) === TRUE) {
		  header("Location: ../loggedin/team.edit.php?team=editsuccess");
				exit();	
		}else {
			echo "Error updating record: " . $conn->error;
		}
	}
	
if (isset($_POST['delete'])){
	include_once '../dbh.php';

	$dir = "../images/teambadges/";
	$file = "teambadge";
	$teamid = $_POST['teamid'];
	$ext = ".png";
	
	
	unlink ("$dir$file$teamid$ext");
	
	

	$sql = "DELETE teams , teambadge  FROM teams  INNER JOIN teambadge WHERE teams.teamid= teambadge.teamid AND teams.teamid='$_POST[teamid]';";	
	
		if ($conn->query($sql) === TRUE) {
			
	
		header("Location: ../loggedin/team.edit.php?team=delete-success");
		exit();	
		}else {
		echo "Delete Error " . $conn->error;
		}
	}
	?>