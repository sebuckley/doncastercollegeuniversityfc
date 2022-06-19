<?php include 'header.php' ?>
<div class="row" >

<div class="table-body"  style="background-color:green;width:457px;height:566px;">		
		<div class="carousel-item active">

							
						
							<h3 style="margin-left:10px;">Wednesday's Results</h3>
								<br>	
							<table width="100%" style="margin-left:10px;">
						
													
													<?php
													
													include_once '../dbh.php';
		 $sql = "SELECT * FROM fixtures ORDER BY fixtures.fixturedate ASC";
		 $records = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($records) > 0 ) {	 
			 
		while ($row = mysqli_fetch_array($records)){
		 
			
			 
			 $date = $row['fixturedate'];
			$newdate = date("l jS F Y", strtotime($date));
		
				

				

	
													echo "<tr style='height: 10px !important; /* overwrites any other rules */border-bottom:1px solid white;'>";
													echo "<td ></td>";
													echo "<td ></td>";
													echo "</tr>";
													echo "<tr style='height: 10px !important; /* overwrites any other rules */;'>";
													echo "<td > </td>";
													echo "<td ></td>";
													echo "</tr>";
												
													echo "<td  width='90%'>".$row['hometeamname']." </td>";
													echo "<td  width='10%' style='background-color:red;color:white;text-align:center;padding-top:3px;padding-bottom:3px;'>".$row['hometeamscore']." </td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td width='90%'>".$row['awayteamname']." </td>";
													echo "<td width='10%' style='background-color:red;color:white;text-align:center;padding-top:3px;padding-bottom:3px;'>".$row['awayteamscore']." </td>";
												
													
												
 
 

	

				}	
			
		
			}									
													
										
									
		
				?>
													<tr style='height: 10px !important; /* overwrites any other rules */;border-bottom:1px solid white;'>
													<td > </td>
													<td ></td>
													</tr>
													</table>
							</div>
		
							<!-- End of Item 1 -->
<?php include 'footer.php' ?>