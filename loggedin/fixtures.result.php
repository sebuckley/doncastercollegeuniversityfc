		<?php include '../includes/header.php' ?>
		<?php 
		if (isset($_SESSION['id'])){
			include_once '../dbh.php';
		 $sql = "SELECT * FROM fixtures INNER JOIN competition ON fixtures.competitionid = competition.competitionid INNER JOIN teams1 ON fixtures.hometeamid = teams.teamid GROUP BY fixtureid ORDER BY fixturedate ASC";
		 $records = mysqli_query($conn, $sql)
		 
		 ?>
			
		<div class='login-card-newsinput' >
        <h1>Fixtures and Results</h1><br>
		<table class="newsinputform" width="100%">
	
		<?php
		 
		while ($row = mysqli_fetch_array($records)){
		
		
	
			
			
		
		$date = $row['fixturedate'];
		$newdate = date("l jS F Y", strtotime($date));
		
		
		echo "<form id='newsinputform' action='../includes/fixture.amend.delete.php' method='post'>";
		echo "<tr>";
		echo "<th class='fixtures'></th>";
		echo "<th class='fixtures'>Competition</th>";
		echo "<th class='fixtures'></th>";
		echo "<th class='fixtures'></th>";
		echo "<th class='fixtures'>Fixture Date</th>";
		echo "<th colspan='4' class='fixtures'>KO Time</th>";
		echo "<th class='fixtures'></th>";
		echo "<th class='fixtures'></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td class='fixtures'></td>";
		echo "<td colspan='3'> <input type='text' readonly name='competitionname' value='".$row['competitionname']."'></td>";
		echo "<td  class='fixtures'><input type='text' readonly name='competitionname' value='$newdate'></td>";
		echo "<td colspan='4'> <input type='text' name='kotime' value='".$row['kotime']."'></td>";
		echo "<td class='fixtures'></td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<th class='fixtures'></th>";
		echo "<th class='fixtures'>Home Team</th>";
		echo "<th class='fixtures' style='text-align:center;' >Score</th>";
		echo "<th class='fixtures'></th>";
		echo "<th class='fixtures'>Away Team</th>";
		echo "<th class='fixtures' style='text-align:center;' >Score</th>";
		echo "<th class='fixtures'></th>";
		echo "<th class='fixtures'></th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td > <input type='text' hidden name='fixtureid' value='".$row['fixtureid']."'></td>";
		echo "<td class='fixtures' ><input type='text' readonly name='hometeam' value='".$row['hometeamname']."'></td>";
		echo "<td class='fixtures center' width='5%'><input type='text' name='hometeamscore' value='".$row['hometeamscore']."'></td>";
		echo "<td class='fixtures' width='5%' style='text-align:center;'  >v</td>";
		echo "<td  class='fixtures'><input type='text' readonly name='awayteam' value='".$row['awayteamname']."'></td>";
		echo "<td class='fixtures center' width='5%' ><input type='text' name='awayteamscore' value='".$row['awayteamscore']."'></td>";
		echo "<td style='padding-left:5px;padding-top:6px;'><input  type='submit' name='update' class='login login-update' value='Update'></td>";
		echo "<td class='fixtures' style='padding-left:5px;padding-top:6px;'><input  type='submit' name='delete' class='login login-delete btn-danger' value='Delete'></td>";
		echo "</tr>";
		
		
		echo "</form>";
		}
		
		
		?>
		</table>
		
		<?php  ?>
		</div>
		<?php include 'addfixture.php';
			}else {
				echo "You were unsuccesful in logging in.";
    }
	
	
?>	<br>

		<?php include '../includes/footer.php' ?>
		
