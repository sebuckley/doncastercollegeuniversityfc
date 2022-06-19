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

<?php

$dir = '../images/TV';



if ($opendir = opendir($dir))

{


	


	?>
	
	<div id='carouselExampleSlidesOnly' class='carousel slide' data-ride='carousel'>
		<div class='carousel-inner'>
			<?php 
			

				
				while (($file = readdir($opendir)) !== FALSE)
					
				{
				
				
				
				
				if($file!='.'&&$file!='..'&&$file!='...'){				
					
				
				
				echo "<div class='carousel-item'>
						<img src=$dir/$file. height='auto' width='800px' >
						</div>";
								}
				}}
				

			?>
		</div>
	</div>
	
	


<script>
var $item = $('.carousel-item'); 
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight); 
$item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight);
});

$('.carousel').carousel({
  interval: 1000,
  pause: "false"
});
</script>

</body>

</html>