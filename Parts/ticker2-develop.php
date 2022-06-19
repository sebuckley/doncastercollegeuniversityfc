<?php include 'header.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../scripts/jquery.webticker.min.js"></script>
<div class="row">
<div class="col-lg-12 breakingnews">
<ul id="webTicker">
		<?php 
		include_once '../dbh.php';
		 $sql = "SELECT * FROM fixtures WHERE fixturedate BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE();" ;
		 $records = mysqli_query($conn, $sql);
		 
		 while ($row = mysqli_fetch_array($records)){
			 
		echo "<li>".$row['hometeam'].' '.$row['hometeamscore']. ' - '.$row['awayteamscore'].' '.$row['awayteam']."</li>";
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