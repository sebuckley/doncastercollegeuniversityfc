<?php


	
if (isset($_POST['archive'])){
	
	$dir = "/images/tv/";
	$desitnation = "/images/tvarchive/";
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
    header ("Location: ../loggedin/mainscreenimage.upload.develop.php?move=move-success");
		
}

}
	

	?>
