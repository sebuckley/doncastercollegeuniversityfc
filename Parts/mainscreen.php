<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row" >
<div class="col-lg-9 mainscreen">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	

      <img class="d-block tv" src="../images/SBP-001-test.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block tv" src="../images/SBP-002-test.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block tv" src="../images/SBP-003-test.jpg" alt="Third slide">
    </div>
  </div>
</div>



</div>


<div class="col-lg-3 sidebar">
<div id="timestamp" class="time">
<?php include 'timestamp.php' ?>


</div>

<div class="date">

<?php echo date("l")." " .date("F") ." " .date("j");

?>

</div>

<div class="academylogo" >


<img class="center" src="../images/academyofsportlogo.png" width="200px" height="auto">


</div>


			<div class="table-body">
				 <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
						<div class="carousel-inner">
						
								<?php include 'nextgame.develop.php'?>
							
		
							<!-- End of Item 1 -->
							<div class="carousel-item">
																<h5>BUCS Northern 5B</h5>
								<table>
									<tr>	<td class="centre"></td>		<td></td>							<td class="centre">P</td>	<td class="centre">PTS</td>		</tr>
									<tr>	<td class="centre">1</td>		<td>Doncaster College 1st</td>		<td class="centre">8</td>	<td class="centre red">40</td>	</tr>
									<tr>
									<tr> 	<td class="centre">2</td>		<td>Leeds Beckett 5th</td>			<td class="centre">9</td>	<td class="centre red">34</td>	</tr>

									<tr>	<td class="centre">3</td>		<td>Teesside 1st</td>				<td class="centre">8</td>	<td class="centre red">29</td>	</tr>
									<tr>	<td class="centre">4</td>		<td>Sheffield Hallam 3rd</td>		<td class="centre">9</td>	<td class="centre red">18</td>	</tr>
									<tr>	<td class="centre">5</td>		<td>Leeds 5th</td>					<td class="centre">8</td>	<td class="centre red">14</td>	</tr>

									<tr>	<td class="centre">6</td>		<td>Leeds 4th</td>					<td class="centre">6</td>	<td class="centre red">11</td>	</tr>
										
									<tr>	<td class="centre">7</td>		<td>Hull 3rd</td>					<td class="centre">8</td>	<td class="centre red">6</td>	</tr>

									<tr>	<td class="centre">8</td>		<td>York 3rd</td>					<td class="centre">7</td>	<td class="centre red">5</td>	</tr>

									<tr>	<td class="centre">9</td>		<td>York St John 2nd</td>			<td class="centre">8</td>	<td class="centre red">4</td>	</tr>
									<tr>	<td class="centre">10</td>		<td>Leeds Trinity 1st</td>			<td class="centre">9</td>	<td class="centre red">3</td>	</tr>
								</table>
								
								
									<h5 style="padding-top:20px" >Next Game</h5>
													<table class="nextgame">
													<tr>
													<td  class="centre" width="50%"><img src="../images/dkateams/kIGHTSlOGO.png" width="100px" height="auto"></td>
													<td  class="centre" width="50%"><img src="../images/dkateams/LeedsBeckett.svg.png" width="100px" height="auto"></td>	
													</tr>	
													<tr>
													<td  class="centre" width="50%">Doncaster Knights Academy</td>
											
													<td class="centre" width="50%">Leeds Beckett University</td>
													</tr>
													<tr>
													<th colspan="2" ><p>Wednesday 2:30pm kick off</p></th>
													</table>
								
							</div>
							<!-- End of Item 2 -->
						
						</div>
		
				</div>
			</div>
	<br>
			


				
			</div>


</div>

<script>
$(document).ready(function(){
setInterval(function(){
$("#timestamp").load('timestamp.php')
}, 1000);
});
</script>

