<?php include 'header.php' ?>


	<div class='row'>	 
	 <?php
			include_once '../dbh.php';
		 $sql = 'SELECT * FROM news;';
		 $records = mysqli_query($conn, $sql);?>
		<div class='col-lg-2 infobar'>
			<div class="infobar-body">	
				<div id='carouselExampleSlidesOnly' class='carousel slide ' data-ride='carousel' data-interval='10000'>
					<div class='carousel-inner'>
								<?php
								if ($row = mysqli_fetch_array($records)){
								echo"<div class='carousel-item active'>";
									echo "<p  style='color:white;padding-top:30px;'>".$row['newstype']. "</p>";
								echo"</div>";
								}
								?>
								<?php
								while ($row = mysqli_fetch_array($records)){
				
				
								echo"<div class='carousel-item' >";
									echo "<p style='color:white;padding-top:30px;'>".$row['newstype']."</p>";
								echo"</div>";				
								}
								?>
							</div>
					</div>
			
								
				
			
							
			</div>	
		</div>
		 <?php
			include_once '../dbh.php';
		 $sql = 'SELECT * FROM news;';
		 $records = mysqli_query($conn, $sql);?>
		<div class='col-lg-7 newsslider'>
			<div class='news-body'>
				 <div id='carouselExampleSlidesOnly' class='carousel slide ' data-ride='carousel' data-interval='10000'>
						<div class='carousel-inner'>
								<?php
								if ($row = mysqli_fetch_array($records)){
								echo"<div class='carousel-item active'>";
									echo "<p class='news-text' style='color:black;'>".$row['news1']."</p>";
									echo "<p class='news-text' style='color:black;'>".$row['news2']."</p>";
								echo"</div>";
								}
								?>
								<?php
								while ($row = mysqli_fetch_array($records)){
				
				
								echo"<div class='carousel-item' data-interval='10000'>";
									echo "<p class='news-text' style='color:black;'>".$row['news1']."</p>";
									echo "<p class='news-text' style='color:black;'>".$row['news2']."</p>";
								echo"</div>";				
								}
								?>
						

						</div>
		
				</div>
			</div>

		</div>

		<div class='col-lg-3 sidebar'>
		<?php include 'sponsorslogo2.php' ?>

		</div>
	</div>



<?php include 'footer.php' ?>