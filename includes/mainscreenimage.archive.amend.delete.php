<?php


	
if (isset($_POST['reuse'])){
	
	$desitnation = "/images/tv/";
	$dir = "/images/tvarchive/";
	$filename = $_POST['filepath'];
	
	$currentFilePath = "../$dir/$filename";
 
//Where we want to move the file to. In this example, we
//are moving the .txt file from directory_a to directory_b
$newFilePath = "../$desitnation/$filename";

//echo $newFilePath."<br>";
//echo $currentFilePath;
 
//Move the file using PHP's rename function.
$fileMoved = rename($currentFilePath, $newFilePath);
 
if($fileMoved){
	unlink ($currentFilePath);
	header ("Location: ../loggedin/mainscreenimage.upload.archive.php?move-success");
		
}

}
	
if (isset($_POST['delete'])){

		$dir2 = "../images/tvarchive/";
		$filename = $_POST['filepath'];
		$filepath = "$dir2/$filename";
		
	
		unlink ($filepath);
		header ("Location: ../loggedin/mainscreenimage.upload.archive.php?move-success");
				
}
	
	?>
