<?php include '../includes/header.php' ?>



<div class="login-card" >
    <h1>Log-in</h1><br>
  <form action="../includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="User Name/Email">
    <input type="password" name="pwd" placeholder="Password">
    <input type="submit" name="submit" class="login login-submit" value="login">
  </form>

    
  <div class="login-help">
    <a href="../register">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->



	
<?php include '../includes/footer.php' ?>