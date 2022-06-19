<?php

if (isset($_POST['submit'])){
	
	include_once '../dbh.php';
	date_default_timezone_set("Europe/London");
	
	$newstype = mysqli_real_escape_string($conn, $_POST['newstype']);
	$news1 = mysqli_real_escape_string($conn, $_POST['news1']);
	$news2 = mysqli_real_escape_string($conn, $_POST['news2']);
	$datedue = mysqli_real_escape_string($conn, $_POST['datedue']);
	

	
	if (empty($newstype) || empty($news1) || empty($news2) ){
			
			
			
		
		} 	
			$sql = "INSERT INTO news (NewsType, News1, News2, DateDue, DateCreated) VALUES ('$newstype', '$news1', '$news2', '$datedue', Now() )";
			$result = mysqli_query($conn, $sql);
			header("Location: ../loggedin/news.edit.php?news=success");
		exit();		
				}
			
		
	
	
else{
	header("Location: ../loggedin/createplayer.php?news=error");
	exit();


	
		

 
}