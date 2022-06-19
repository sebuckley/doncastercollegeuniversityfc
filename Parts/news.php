<!DOCTYPE html>

<html>

 
<head>

<title>Academy News</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="../scripts/jquery.webticker.min.js"></script>
  

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 <link rel="stylesheet" type="text/css" href="../news.css">

</head>

<body>

<?php include 'mainscreen.php'?>

<?php include 'news-slider.php' ?>


<?php include 'ticker2-fixtures.php'?>






</div>

<div class="row">
<div class="col-lg-12 bottom">

<p class="bottom-text"></p>


</div>

</div>
<div class="row">
<div class="col-lg-12 vbottom">




</div>

</div>
</div>

<script src="js/jquery-1.8.2.min.js"></script>
<script>
$(document).ready(function(e) {
	var newsNum = $(".newsTicker li").length;
	
	var totalNews_W =0;	
	for(var i=0; i<newsNum; i++){
		var news_W = $(".newsTicker li").eq(i).outerWidth(true);
		totalNews_W = totalNews_W + news_W;
	}
	
	$(".newsTicker").css('width', totalNews_W+'px');	
	
	var speed =1, animAmount, animInterval;
	
	animateNews();

	function animateNews(){
		$(".newsTicker li").eq(0).animate({
			'marginLeft' : '-='+ speed + 'px'
		},1, function(){
			animAmount = speed;
			var animNews_W = $(".newsTicker li").eq(0).outerWidth(true);
			
			console.log($(this));
			
			if(animAmount >= animNews_W){
				$(this).parent().append($(this));
				$(this).removeAttr('style');	
			}
			
			
			
			animInterval = setTimeout(function(){
				animateNews();	
			});	
		});
	}
	
	
});
</script>
</body>

</html>