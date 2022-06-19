<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Team DCU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<body>

<!-- Nav Bar -->
<?php

if (isset($_SESSION['id'])) {
	
	echo "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
  <a class='navbar-brand' href='#'><img src='http://localhost/DoncasterCollegeUniversityFC/images/DCUwebpicsize.png' width='150px'/> </a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item active'>
        <a class='nav-link' href='#' style='font-size:30px'>Home <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'  style='font-size:30px'>
          Match
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='#'>Fixtures and Results</a>
		   <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#'>Table</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#'>2nd Team</a>
        </div>
      </li>
	  <li class='nav-item dropdown'  style='font-size:30px'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Teams
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='#'>1st Team</a>
		   <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#'>2nd Team</a>
         
         
        </div>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='#'  style='font-size:30px'>Contact</a>
      </li>
	   <li class='nav-item'>
        <a class='nav-link' href='#'  style='font-size:30px'>Add Players</a>
      </li>
   
	 <li class='nav-item'>
        <a class='nav-link' href='http://localhost/DoncasterCollegeUniversityFC/loggedin/team.edit.php'  style='font-size:30px'>Add Teams</a>
      </li>
   
	        <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'  style='font-size:30px'>
         Live News
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='../loggedin/news.php'>Edit News</a>
		   <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='../loggedin/fixtures.result.php'>Edit Fixtures</a>
		  <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='../loggedin/mainscreenimage.upload.develop.php'>Edit Mainscreen Images</a>
   
        </div>
      </li>
	  
  
   
      
    </ul>
   <form action='../includes/logout.inc.php' >
	<button type='submit'>Log Out</button>
</form>

</nav>";
}else
 echo "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
  <a class='navbar-brand' href='#'><img src='images/DCUwebpicsize.png' width='150px'/> </a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item active'>
        <a class='nav-link' href='#' style='font-size:30px'>Home <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'  style='font-size:30px'>
          Match
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='#'>Fixtures and Results</a>
		   <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#'>Table</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#'>2nd Team</a>
        </div>
      </li>
	  <li class='nav-item dropdown'  style='font-size:30px'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Teams
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='#'>1st Team</a>
		   <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='#'>2nd Team</a>
         
         
        </div>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='#'  style='font-size:30px'>Contact</a>
      </li>
    </ul>
      
    </ul>
   

</nav>";

?>



