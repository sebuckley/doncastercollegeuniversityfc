			<div class="carousel-item active">
								<h5> South Yorkshre Colleges Flexi League</h5>
								<table>
									<tr>	<td class="centre"></td>		<td></td>								    	<td class="centre">P</td>		<td class="centre">PTS</td>		</tr>
									<tr>	<td class="centre">1</td>		<td>Thomas Rotherham College A</td>			<td class="centre">12</td>		<td class="centre red">30 </td>		</tr>
									<tr>	<td class="centre">2</td>		<td>Doncaster College</td>					<td class="centre">12</td>		<td class="centre red">29 </td>		</tr>
									<tr>	<td class="centre">3</td>		<td>Wath Comprehensive School</td>			<td class="centre">11</td>		<td class="centre red" >23 </td>	</tr>
									<tr>	<td class="centre">4</td>		<td>Wickersley School & Sports College</td>	<td class="centre">12</td>		<td class="centre red">13 </td>		</tr>
									<tr>	<td class="centre">5</td>		<td>Sheffield College</td>					<td class="centre">12</td>		<td class="centre red">10 </td>		</tr>
									<tr>	<td class="centre">6</td>		<td>New College Doncaster</td>				<td class="centre">12</td>		<td class="centre red">9 </td>		</tr>
									<tr>	<td class="centre">7</td>		<td>Dinnington</td>							<td class="centre">11</td>		<td class="centre red">4 </td>		</tr>
								</table>
								<br>
								<br>
							
							
							<h3>Next Game</h3>
								
							<table class='nextgame'>
							<tr>
													
													<?php
													
													include_once '../dbh.php';
		 $sql = "SELECT * FROM fixtures INNER JOIN teams1 ON fixtures.hometeamid = teams1.teamid WHERE hometeamid=7 or awayteamid=7 ORDER BY fixtures.fixturedate ASC";
		 $records = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($records) > 0 ) {	 
			 
		if ($row = mysqli_fetch_array($records)){
		 
			 $hometeamid = $row['hometeamid'];
			 $hometeamname = $row['hometeamname'];
			 $awayteamid = $row['awayteamid'];
			 $awayteamname = $row['awayteamname'];
			 $ground = $row['ground'];
			$fixturedate = $row['fixturedate'];
			$kotime = $row['kotime'];			
			 
			 $date = $row['fixturedate'];
			$newdate = date("l jS F Y", strtotime($date));
		
				
			 $sqlteambadge= "SELECT * FROM teambadge WHERE teamid='$hometeamid'  ;";
			  
			 $resultteambadge = mysqli_query($conn, $sqlteambadge);
			 
			 if (mysqli_num_rows($resultteambadge) > 0 ) {
			 if($rowbadge = mysqli_fetch_assoc($resultteambadge)) {
				
				$hometeamid = $rowbadge['teamid'];
		
		
				
		
		
				if ($rowbadge['status'] == 1) {
															
													echo"<td style='text-align:center;'><img src='../images/teambadges/teambadge$hometeamid.png' width='100px' height='auto'></td>";
																										
				} else {

													echo"<td style='text-align:center;'><img   src='../images/teambadges/default.png' width='100px' height='auto'></td>";
				}	
			
				 $sqlteambadge= "SELECT * FROM teambadge WHERE teamid='$awayteamid'  ;";
			  
			 $resultteambadge = mysqli_query($conn, $sqlteambadge);
			 
			 if (mysqli_num_rows($resultteambadge) > 0 ) {
			 if($rowbadge = mysqli_fetch_assoc($resultteambadge)) {
				
				$awayteamid = $rowbadge['teamid'];
		
		
				
		
		
				if ($rowbadge['status'] == 1) {
															
													echo"<td style='text-align:center;'><img src='../images/teambadges/teambadge$awayteamid.png' width='100px' height='auto'></td>";
																										
				} else {

													echo"<td style='text-align:center;'><img  src='../images/teambadges/default.png' width='100px' height='auto'></td>";
				}	
			
		
			}

		}
			        echo "</tr >";
													
													echo "<tr>";
													echo "<td  class='centre' width='50%'>$hometeamname</td>";
									
													echo "<td class='centre' width='50%'>$awayteamname</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<th colspan='2' ><p>Date: $newdate <br> Kick Off: $kotime <br>Ground: $ground</p></th>";
				echo "</table>"; 
		}
		}
		}
		}		
													
													
										
									
		
				?>
								
							</div>
		
							<!-- End of Item 1 -->
