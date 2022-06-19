<?php

if (isset($_POST['submit'])){
	
	include_once '../dbh.php';
	
	$teamname = mysqli_real_escape_string($conn, $_POST['teamname']);
	$teamnickname = mysqli_real_escape_string($conn, $_POST['teamnickname']);
	$ground = mysqli_real_escape_string($conn, $_POST['ground']);
	$firstline = mysqli_real_escape_string($conn, $_POST['firstline']);
	$town = mysqli_real_escape_string($conn, $_POST['town']);
	$postcode = mysqli_real_escape_string($conn, $_POST['postcode']);

		
			
			$sql = "SELECT * FROM teams WHERE teamname='$teamname'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			
			if ($resultCheck > 0 ) {
			
			header("Location: ../loggedin/team.edit.php?addteam=teamtaken");
			exit();		
			
			}
			else {
			$sql = "INSERT INTO teams (teamname, teamnickname, ground, firstline, town, postcode) VALUES ('$teamname', '$teamnickname', '$ground', '$firstline', '$town', '$postcode')";	
			$result = mysqli_query($conn, $sql);
			
			$sql = "SELECT * FROM teams WHERE teamname='$teamname'";
			$result = mysqli_query($conn, $sql);
			
			$row = mysqli_fetch_assoc($result);
			
			$TeamID = $row['teamid'];
			
		
			
			
			$sqlteambadge = "INSERT INTO teambadge (teamid, status) VALUES ('$TeamID', '0')";	
			$result = mysqli_query($conn, $sqlteambadge);
			
			
			

			header("Location: ../loggedin/team.edit.php?addteam=success");
			exit();		
				
				
				
				
				
			}
}
			
			
