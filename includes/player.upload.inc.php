<?php 
session_start();
include_once '../dbh.php';

 $playerid = $_POST['playerid'];

if (isset($_POST['upload'])) {
	
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allowed = array('jpg', 'jpeg', 'png');
		
		if (in_array($fileActualExt, $allowed )){
			if ($fileError === 0){
				if ($fileSize < 50000000) {
					$fileNewName = "player".$playerid.".".$fileActualExt;
					$fileDestination = '../images/playerimages/'.$fileNewName;
					move_uploaded_file($fileTmpName, $fileDestination);
					
					$sql = "UPDATE playerimage SET status=1, extension='$fileActualExt' WHERE playerid='$playerid'";
					$result = mysqli_query($conn, $sql);
					
					header("Location: ../loggedin/player.edit.php?upload=success");
					
					
				} else {
				echo "Your file is too big!";	
					
				}	
				
			} else {
			echo "There was an error uploading your file!";				
			}
			
			
		} else {
			echo "You cannot upload files of this type!";
		}
	
}

