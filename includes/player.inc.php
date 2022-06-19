<?php

if (isset($_POST['submit'])){
	
	include_once '../dbh.php';
	
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$playernickname = mysqli_real_escape_string($conn, $_POST['playernickname']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$position = mysqli_real_escape_string($conn, $_POST['position']);
	$teams = mysqli_real_escape_string($conn, $_POST['teams']);

			$sql = "SELECT * FROM teams1 WHERE teamname='$teams';";
			$result = mysqli_query($conn, $sql);
			
			
			if (mysqli_num_rows($result) > 0 ) {
				
			while ($row = mysqli_fetch_assoc($result)) {
				$teamid = $row['teamid'];
		
			
			$sql = "INSERT INTO players2 (firstname, lastname, playersnickname, dob, position, teamid) VALUES ('$firstname', '$lastname', '$playernickname', '$dob', '$position', '$teamid');";
			$result = mysqli_query($conn, $sql);
			
			$sql =	"SELECT * FROM players2 WHERE firstname='$firstname' AND lastname='$lastname' AND dob='$dob';";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0 ) {
				
			while ($row = mysqli_fetch_assoc($result)) {
				$playerid = $row['playerid'];
		
			 
			 $sql = "INSERT INTO playerimage (playerid, status) VALUES ('$playerid', 0);";
			mysqli_query($conn, $sql);
			
				
						
			header("Location: ../loggedin/player.edit.php?addplayer=success");
			exit();		
			
			}
				
			}
			
			
			} 
			}
}
			
