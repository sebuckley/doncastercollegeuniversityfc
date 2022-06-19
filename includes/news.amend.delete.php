<?php


	
if (isset($_POST['update'])){
	include_once '../dbh.php';

	$sql = "UPDATE news SET newstype='$_POST[newstype]', news1='$_POST[news1]',news2='$_POST[news2]' WHERE newsid='$_POST[NewsID]'";
	

		if ($conn->query($sql) === TRUE) {
		  header("Location: ../loggedin/news.edit.php?news=editsuccess");
				exit();	
		}else {
			echo "Error updating record: " . $conn->error;
		}
	}
	
if (isset($_POST['delete'])){
	include_once '../dbh.php';

	$sql = "DELETE FROM news WHERE NewsID='$_POST[NewsID]'";
	

		if ($conn->query($sql) === TRUE) {
		  header("Location: ../loggedin/news.edit.php?news=delete-success");
				exit();	
		}else {
			echo "Delete Error " . $conn->error;
		}
	}
	?>
