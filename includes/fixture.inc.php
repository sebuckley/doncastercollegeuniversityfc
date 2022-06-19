<?php

if (isset($_POST['submit'])){
	
	include_once '../dbh.php';
	
	$hometeamname = mysqli_real_escape_string($conn, $_POST['hometeamname']);
	$awayteamname = mysqli_real_escape_string($conn, $_POST['awayteamname']);
	$competitionname = mysqli_real_escape_string($conn, $_POST['competitionname']);
	$kotime = mysqli_real_escape_string($conn, $_POST['kotime']);
	$fixturedate = mysqli_real_escape_string($conn, $_POST['fixturedate']);
	
	$sql = "SELECT * FROM teams1 where teamname='$hometeamname' ;";
	$sqlresult = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($sqlresult) > 0) {
		$row = mysqli_fetch_assoc($sqlresult);
		$hometeamid = $row['teamid'];

			
		
	}
	
		$sql2 = "SELECT * FROM teams1 where teamname='$awayteamname' ";
	$sqlresult2 = mysqli_query($conn, $sql2);
	
	if (mysqli_num_rows($sqlresult2) > 0) {
		$row = mysqli_fetch_assoc($sqlresult2);
		$awayteamid = $row['teamid'];

			
		
	}

	
		$sql3 = "SELECT * FROM competition where competitionname='$competitionname' ";
		$sqlresult3 = mysqli_query($conn, $sql3);
	
	if (mysqli_num_rows($sqlresult3) > 0) {
		$row = mysqli_fetch_assoc($sqlresult3);
		$competitionid = $row['competitionid'];

			
		
	}

	
	


	
		if (empty($hometeamname) || empty($awayteamname) || empty($fixturedate) || empty($kotime) ){
			header("Location: ../loggedin/fixtures.result.php?fixtureadd=box'semptyerror");
			exit();
		
		} else {	
		$sql = "INSERT INTO fixtures (hometeamid, hometeamname, hometeamscore, awayteamid, awayteamname, awayteamscore, competitionid, fixturedate, kotime) VALUES ('$hometeamid', '$hometeamname', 'L', '$awayteamid', '$awayteamname', 'L', '$competitionid', '$fixturedate' , '$kotime')";
			$result = mysqli_query($conn, $sql);
			header("Location: ../loggedin/fixtures.result.php?fixtureaddnews=success");
		exit();		
				}
			
}
	
	
else{
	header("Location: ../loggedin/fixtures.result.php?fixtureadd=error");
	exit();
}


 
