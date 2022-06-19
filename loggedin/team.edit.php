	<?php include '../includes/header.php' ?>
	<?php 	if (isset($_SESSION['id'])){
		
		
		?>
			
		<?php include 'addteam.php';?>
		
		
		
					<?php 
		
		include_once '../dbh.php';
		 $sql = "SELECT * FROM teams";
		 $records = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($records) > 0 ) {	 
			 
		while ($row = mysqli_fetch_array($records)){
		 
			 $teamid = $row['teamid'];
			 
			 $sqlteambadge = "SELECT * FROM teambadge WHERE teamid='$teamid' ";
			 $resultteambadge = mysqli_query($conn, $sqlteambadge);
			 
			
			while($rowbadge = mysqli_fetch_assoc($resultteambadge)) {
			
		
				if ($rowbadge['status'] == 1) {
					
							echo "<div class='login-card-newsinput' >";
							echo "<h1>".$row['teamname']."</h1><br>";
							echo "<table class='newsinputform'width='100%'>";
					
							echo "<form id='newsinputform' action='../includes/teambadge.upload.inc.php' method='post' enctype='multipart/form-data'>";
							echo "<tr>";
							echo "<td ><input type='text' hidden name='teamid' value='".$row['teamid']."'></td>";
							echo "<td class='fixtures'><img src='../images/teambadges/teambadge".$teamid.".png' width='150px' height='auto'></td>";
							echo "<td  class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							echo "</form>";
							
							echo "<form id='newsinputform' action='../includes/team.amend.delete.php' method='post'>";
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Team</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Nickname</th>";
							echo "<th colspan='4' class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td class='fixtures'></td>";
							echo "<td colspan='3'> <input type='text' name='teamname' value='".$row['teamname']."'></td>";
							echo "<td colspan='4'><input type='text' name='teamnickname' value='".$row['teamnickname']."'></td>";
							echo "<td class='fixtures'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Ground</th>";
							echo "<th class='fixtures'>First Line</th>";
							echo "<th class='fixtures'>Town</th>";
							echo "<th class='fixtures'>Post Code</th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='teamid' value='".$row['teamid']."'></td>";
							echo "<td class='fixtures'><input type='text' name='ground' value='".$row['ground']."'></td>";
							echo "<td  class='fixtures'><input type='text' name='firstline' value='".$row['firstline']."'></td>";
							echo "<td class='fixtures'><input type='text' name='town' value='".$row['town']."'></td>";
							echo "<td class='fixtures'><input type='text' name='postcode' value='".$row['postcode']."'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'><input  type='submit' name='update' class='login login-update' value='Update'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'><input  type='submit' name='delete' class='login login-delete btn-danger' value='Delete'></td>";
							echo "</tr>";
							echo "</form>";
							
							echo "</table>";
							echo "</div>";
				
				} else {
					
					
								echo "<div class='login-card-newsinput' >";
							echo "<h1>".$row['teamname']."</h1><br>";
							echo "<table class='newsinputform'width='100%'>";
					
							echo "<form id='newsinputform' action='../includes/teambadge.upload.inc.php' method='post' enctype='multipart/form-data'>";
							echo "<tr>";
							echo "<td ><input type='text' hidden name='teamid' value='".$row['teamid']."'></td>";
							echo "<td class='fixtures'><img src='../images/teambadges/default.png' width='150px' height='auto'></td>";
							echo "<td ><input  type='file' name='file'></td>";
							echo "<td ><input  type='submit' name='upload' class='login login-update' value='Upload'></td>";
							echo "<td class='fixtures'></td>";
							echo "<td class='fixtures' ></td>";
							echo "<td style='padding-left:5px;padding-top:6px;'></td>";
							echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'></td>";
							echo "</tr>";
							echo "</form>";
							
							echo "<form id='newsinputform' action='../includes/team.amend.delete.php' method='post'>";
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Team</th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Nickname</th>";
							echo "<th colspan='4' class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td class='fixtures'></td>";
							echo "<td colspan='3'> <input type='text' name='teamname' value='".$row['teamname']."'></td>";
							echo "<td colspan='4'><input type='text' name='teamnickname' value='".$row['teamnickname']."'></td>";
							echo "<td class='fixtures'></td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'>Ground</th>";
							echo "<th class='fixtures'>First Line</th>";
							echo "<th class='fixtures'>Town</th>";
							echo "<th class='fixtures'>Post Code</th>";
							echo "<th class='fixtures' ></th>";
							echo "<th class='fixtures'></th>";
							echo "<th class='fixtures'></th>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td > <input type='text' hidden name='teamid' value='".$row['teamid']."'></td>";
							echo "<td class='fixtures'><input type='text' name='ground' value='".$row['ground']."'></td>";
							echo "<td  class='fixtures'><input type='text' name='firstline' value='".$row['firstline']."'></td>";
							echo "<td class='fixtures'><input type='text' name='town' value='".$row['town']."'></td>";
							echo "<td class='fixtures'><input type='text' name='postcode' value='".$row['postcode']."'></td>";
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
			} else {
				echo "<div class='login-card-newsinput' >";
							echo "<h1>No Teams in Database</h1><br>";
				echo "</div>";	
			}
			
		}
		
		
	
	
		
		?>
		</table>
		
	
		</div>
		

	
		
	<?php include '../includes/footer.php' ?>