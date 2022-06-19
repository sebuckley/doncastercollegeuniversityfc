

  
			
		<div class='login-card-fixtures' >
        <h1>Add Fixture</h1><br>
        <form action='../includes/fixture.inc.php' method='post'>
	
		<input list="teams" name="hometeamname" placeholder='Home Team'>
			  <datalist id="teams">
				
				<?php 
				
				include_once '../dbh.php';
				
				$sql = "SELECT * FROM teams1;";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
					
					echo"<option value='".$row['teamname']."' size='200px'>";	
						
					}
					
				}
				
				
				?>
			  </datalist>
		
		
	
		<input list="teams" name="awayteamname" placeholder='Away Team'>
			  <datalist id="teams">
				
				<?php 
				
				include_once '../dbh.php';
				
				$sql = "SELECT * FROM teams1;";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
					
					echo"<option value='".$row['teamname']."' size='200px'>";	
						
					}
					
				}
				
				
				?>
			  </datalist>
	
	
		<input list="competitionnme"  name="competitionname" placeholder='Competition'>
			  <datalist id="competitionname">
				
				<?php 
				
				include_once '../dbh.php';
				
				$sql = "SELECT * FROM competition;";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
					
					echo"<option value='".$row['competitionname']." - ".$row['competitiontype']."' size='200px'>";	
						
					}
					
				}
				
				
				?>
			  </datalist>
		 
		<input type='text' name='kotime' placeholder='Kick Off Time i.e 14:30pm'></td>
		<br><label class='fixturelabel'>Fixture Date:</label>
		<input type='date' name='fixturedate' >
	

		<br> <br>
		<input  type='submit' name='submit' class='login login-submit' value='Submit'>
        </form>		
				
	
                    
                    
              
                
                
                
		</div>
            
            
        
