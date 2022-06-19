<?php
session_start();

if (isset($_POST['submit'])){
	include'../dbh.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	if (empty($uid) || empty($pwd)){
	header("Location: ../login/index.php?login=empty");
	exit();	
	} else {
	$sql = "SELECT * FROM users WHERE email='$uid'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);	
	if ($resultCheck < 1) {
	header("Location: ../login/index.php?login=errorthis is wrong");
	exit();		
	}else{
	if($row = mysqli_fetch_assoc($result)) {
	$hashedPwdCheck = password_verify($pwd, $row['pwd']);
	if ($hashedPwdCheck = false) {
    header("Location: ../login/index.php?passworderror");
	exit();	
	} elseif ($hashedPwdCheck = true) {
        $_SESSION['id'] = $row['id'];
	$_SESSION['uid'] = $row['uid'];
	$_SESSION['fname'] = $row['fname'];
	$_SESSION['lname'] = $row['lname'];
	$_SESSION['email'] = $row['email'];
	header("Location: ../loggedin/index.php?login=success");
	exit();	
	}
	}	
	}
	}	
	}else {
	header("Location: ../login/index.php?login=error");
		exit();	
	}