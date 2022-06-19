<?php 
include '../includes/header.php'; ?>

<div class="login-card" >
    <h1>Register</h1><br>
  <form action="../includes/signup.inc.php" method="post">
    <input type="text" name="fname" placeholder="First Name"><br>
	<input type="text" name="lname" placeholder="Last Name"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<input type="text" name="uid" placeholder="User ID"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
    <input type="submit" name="submit" class="login login-submit" value="Register">
  </form>


    
  <div class="login-help">
    <a href="../login">Already Registered, Log In Here</a>
  </div>
</div>



<?php include '../includes/footer.php' ?>