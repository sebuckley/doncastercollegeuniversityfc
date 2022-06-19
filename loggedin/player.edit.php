	<?php include '../includes/header.php' ?>
	<?php 	if (isset($_SESSION['id'])){
		
		
		?>
			
		
					<?php 
		
		include_once '../dbh.php';
		 $sql = "SELECT * FROM players2 LEFT JOIN teams1 ON players2.teamid = teams1.teamid";
		 $records = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($records) > 0 ) {	 
			 
		while ($row = mysqli_fetch_array($records)){
		 
			 $playerid = $row['playerid'];
			 $teamid = $row['teamid'];
			 $sqlplayerimg = "SELECT * FROM playerimage WHERE playerid='$playerid';";
		
			  
			 $resultplayerimg = mysqli_query($conn, $sqlplayerimg);
			
				if (mysqli_num_rows($resultplayerimg) > 0 ) {
			
				
			
			while($rowplayerimg = mysqli_fetch_assoc($resultplayerimg)) {
					
			
		
				if ($rowplayerimg['status'] == 1) {
						$ext = $rowplayerimg['extension'];
						$playerimage = $playerid.".".$ext;
						
					
														echo "<div class='login-card-newsinput' >";
							echo "<h1>".$row['firstname']." ".$row['lastname']."</h1><br>";
							echo "<h2 style='text-align:center;'>".$row['teamname']."</h2><br>";
							echo "<table class='newsinputform'width='100%'>";
					
							echo "<form id='newsinputform' action='../includes/player.upload.inc.php' method='post' enctype='multipart/form-data'>";
							echo "<tr>";
								echo "<td ><input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'><img src='../images/playerimages/player".$playerimage."' width='150px' height='auto'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							echo "</form>";
							
							echo "<form id='newsinputform' action='../includes/team.amend.delete.php' method='post'>";
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>First Name</th>";
							echo "<th class='fixtures'>Surname</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Nickname</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td class='fixtures'></td>";
							echo "<td > <input type='text' readonly name='firstname' value='".$row['firstname']."'></td>";
							echo "<td ><input type='text' readonly name='lastname' value='".$row['lastname']."'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td><input type='text' name='playersnickname' value='".$row['playersnickname']."'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Age</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
							$date1 = date_create($row['dob']);
							$date2 = date_create();
							$diff = date_diff ($date2, $date1);
							
							$number = $diff->y." years old";
							
							echo "<td class='fixtures'><input type='text' readonly name='dob' value='$number'></td>";
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Position</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
							echo "<td><input type='text' name='playerid' readonly value='".$row['position']."'></td>";
							
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Update Position</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
									echo "<td><input list='position' name='position' value'".$row['position']." '>
									<datalist id='position'>
										<option value='Goalkeeper'>
										<option value='Defender'>
										<option value='Midfielder'>
										<option value='Striker'>
												
									</datalist></td>";
							
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'><input  type='submit' name='update' class='login login-update' value='Update'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'><input  type='submit' name='delete' class='login login-delete btn-danger' value='Delete'></td>";
							echo "</tr>";
							echo "</form>";
							
							echo "</table>";
							echo "</div>";
					
				
				} else {
					
					
							echo "<div class='login-card-newsinput' >";
							echo "<h1>".$row['firstname']." ".$row['lastname']."</h1><br>";
							echo "<h2 style='text-align:center;'>".$row['teamname']."</h2><br>";
							echo "<table class='newsinputform'width='100%'>";
					
							echo "<form id='newsinputform' action='../includes/player.upload.inc.php' method='post' enctype='multipart/form-data'>";
							echo "<tr>";
							echo "<td ><input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'><img src='../images/playerimages/default.png' width='150px' height='auto'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td ></td>";
							echo "<td class='fixtures'></td>";
							echo "<td  class='fixtures'></td>";
							echo "<td ><input  type='file' name='file'></td>";
							echo "<td ><input  type='submit' name='upload' class='login login-update' value='Upload'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							echo "</form>";
							
							echo "<form id='newsinputform' action='../includes/team.amend.delete.php' method='post'>";
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>First Name</th>";
							echo "<th class='fixtures'>Surname</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Nickname</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td class='fixtures'></td>";
							echo "<td > <input type='text' readonly name='firstname' value='".$row['firstname']."'></td>";
							echo "<td ><input type='text' readonly name='lastname' value='".$row['lastname']."'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td><input type='text' name='playersnickname' value='".$row['playersnickname']."'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Age</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
							$date1 = date_create($row['dob']);
							$date2 = date_create();
							$diff = date_diff ($date2, $date1);
							
							$number = $diff->y." years old";
							
							echo "<td class='fixtures'><input type='text' readonly name='dob' value='$number'></td>";
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Position</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
							echo "<td><input type='text' name='playerid' readonly value='".$row['position']."'></td>";
							
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Update Position</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='playerid' value='".$row['playerid']."'></td>";
									echo "<td><input list='position' name='position' value'".$row['position']." '>
									<datalist id='position'>
										<option value='Goalkeeper'>
										<option value='Defender'>
										<option value='Midfielder'>
										<option value='Striker'>
												
									</datalist></td>";
							
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'><input  type='submit' name='update' class='login login-update' value='Update'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'><input  type='submit' name='delete' class='login login-delete btn-danger' value='Delete'></td>";
							echo "</tr>";
							echo "</form>";
							
							echo "</table>";
							echo "</div>";
					
				}
				
	
			}
					}		 
				}
			} else {
				echo "<div class='login-card-newsinput' >";
							echo "<h1>No Teams in Database</h1><br>";
				echo "</div>";	
			}
			
		}
		
		
	
	
		
		?>
		</table>
		
	
		</div>
		<?php include 'addplayer.php';
		
		
			
	
	
?>

	
		
	<?php include '../includes/footer.php' ?>