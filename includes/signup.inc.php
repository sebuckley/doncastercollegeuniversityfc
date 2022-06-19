<?php

if (isset($_POST['submit'])){
	
	include_once '../dbh.php';
	
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
		if (empty($fname) || empty($lname) || empty($email) || empty($uid) || empty($pwd)){
		header("Location: ../register/index.php?signup=empty");
		exit();
		} else {
		if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $fname)) {
		header("Location: ../register/index.php?signup=invalid");
		exit();	
		} else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../register/index.php?signup=invalidemail");
		exit();	
		}else {
		$sql = "SELECT * FROM users WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0) {
		header("Location: ../register/index.php?signup=usertaken");
		exit();		
		} else{
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			$sql = "INSERT INTO users (fname, lname, email, uid, pwd) VALUES ('$fname', '$lname', '$email', '$uid', '$hashedPwd')";
			$result = mysqli_query($conn, $sql);
			header("Location: ../login/index.php?signup=success");
		exit();		
		}
			}
		}
	}
	
}else{
	header("Location: ../register/index.php");
	exit();
}

