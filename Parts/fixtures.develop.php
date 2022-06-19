<?php include 'header.php' ?>
<div class="row" >

<div class="table-body"  style="background-color:green;width:457px;height:566px;">		
		<div class="carousel-item active">

							
						
							<h3>Fixtures</h3>
								<br>	
							<table width="100%">
						
													
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
													echo "</tr>";
													echo "<tr style='height: 10px !important; /* overwrites any other rules */;'>";
													echo "<td > </td>";
													echo "</tr>";
												
													echo "<td  >".$row['hometeamname']." v</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td >".$row['awayteamname']." </td>";
												
													
												
 
 

	

				}	
			
		
			}									
													
										
									
		
				?>
													<tr style='height: 10px !important; /* overwrites any other rules */;border-bottom:1px solid white;'>
													<td > </td>
													</tr>
													</table>
							</div>
		
							<!-- End of Item 1 -->
<?php include 'footer.php' ?>