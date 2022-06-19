
<?php 


$conn = mysqli_connect("localhost", "root", "", "teamdcu" );

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
	
}