
  
			
		<div class='login-card-fixtures' >
        <h1>Add Player</h1><br>
        <form action='../includes/player.inc.php' method='post'>
        <input type='text' name='firstname' placeholder='First Name'>
		<input type='text' name='lastname' placeholder='Last Name'>
		<input type='text' name='playernickname' placeholder='Nickname(optional)'>
		<input type='date' name='dob' placeholder='Date of Birth'>
		Position:  <input list="position" name="position">
			  <datalist id="position">
					<option value="Goalkeeper">
					<option value="Defender">
					<option value="Midfielder">
					<option value="Striker">
									
				 </datalist>
		  Team:  <input list="teams" name="teams">
			  <datalist id="teams">
				<option value="No Club">
				<?php 
				
				include_once '../dbh.php';
				
				$sql = "SELECT * FROM teams;";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
					
					echo"<option value='".$row['teamname']."' size='200px'>";	
						
					}
					
				}
				
				
				?>
			  </datalist>
		

		<br> <br>
		<input  type='submit' name='submit' class='login login-submit' value='Submit'>
        </form>		
				
	
                    
                    
              
                
                
                
		</div>
            
            

