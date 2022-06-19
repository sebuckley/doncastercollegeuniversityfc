<?php include 'header.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../scripts/jquery.webticker.min.js"></script>
<div class="row">
<div class="col-lg-12 breakingnews">
<ul id="webTicker">
		<?php 
		include_once '../dbh.php';
		 $sql = "SELECT * FROM fixtures INNER JOIN competition ON fixtures.competitionid = competition.competitionid WHERE fixtures.fixturedate BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY);" ;
		 $records = mysqli_query($conn, $sql);
		 
		 if($row = mysqli_fetch_array($records)){ 
		echo"<li style='background-color:black;color:yellow;'>".$row['competitionname']."</li>";
		 }
		?>
		<?php 
		include_once '../dbh.php';
		 $sql = "SELECT * FROM fixtures WHERE fixturedate BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY);" ;
		 $records = mysqli_query($conn, $sql);
		 
		 while ($row = mysqli_fetch_array($records)){ ?>
		<?php		
		echo "<li>".$row['hometeamname'].' '. ' v '.' '.$row['awayteamname']."</li>";
		 }
		 ?>
</ul>

</div>
</div>


<script>
$('#webTicker').webTicker({
	duplicate:true,
	hoverpause:false
	
});

</script>

<?php include 'header.php' ?>