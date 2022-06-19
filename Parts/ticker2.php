<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../scripts/jquery.webticker.min.js"></script>
<div class="row">
<div class="col-lg-12 breakingnews">
<ul id="webTicker">
    <li><img src="../images/BREAKINGNEWS1.png" height="31px" width="auto" style="display:block;"></li>
    <li>And this one will follow it</li>
    <li>Finally when it goes out of screen, it will queue again at the end</li>
</ul>

</div>
</div>


<script>
$('#webTicker').webTicker({
	duplicate:true,
	hoverpause:false
	
});

</script>
