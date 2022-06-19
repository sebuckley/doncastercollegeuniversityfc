<input list="teams" name="teams">
			  <datalist id="teams">
				<option value="No Club">
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
		