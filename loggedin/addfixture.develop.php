<?php include '../includes/header.php' ?>
        

  
			
		<div class='login-card-fixtures' >
        <h1>Add Fixture</h1><br>
        <form action='../includes/fixture.inc.php' method='post'>
        <input type='text' name='hometeam' placeholder='Team 1'>
		<input type='text' hidden name='hometeamscore' value='0'>	
		<input type='text' name='awayteam' placeholder='Team 2'></td>
		<input type='text' hidden name='awayteamscore' value='0'>
		<input type='date' name='fixturedate' >

		<br> <br>
		<input  type='submit' name='submit' class='login login-submit' value='Submit'>
        </form>		
				
	
                    
                    
              
                
                
                
		</div>
            
            
        
<?php include '../includes/footer.php' ?>