<!DOCTYPE html>

<html>

 
<head>

<title>Academy News</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>


</head>

<body>

	<div id='carouselExampleSlidesOnly' width="800px" height="600px" class='carousel slide' data-ride='carousel'>
		<div class='carousel-inner'>

				<?php

				$dir_path = "../images/TV/";
				$extensions_array = array('jpg','png','jpeg');

				if(is_dir($dir_path))
				{
					$files = scandir($dir_path);
					
					for($i = 0; $i < count($files); $i++)
					{
						if($files[$i] !='.' && $files[$i] !='..')
						{
							// get file name
					  
							
							// get file extension
							$file = pathinfo($files[$i]);
							$extension = $file['extension'];
						 
							
						   // check file extension
							if(in_array($extension, $extensions_array))
							{
								
								?>
								
						
						
						<?php
							// show image
							echo "<div class='carousel-item'>
									<img src='$dir_path$files[$i]' style='width:100%;height:100%;'><br>
								</div>";
							}
						}
					}
				}


				?>

		</div>
	</div>

<script>
$(document).ready(function() {
  $('.carousel-item:first-child').addClass('active');
});
</script>

</body>

</html>