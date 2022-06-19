<?php include '../includes/header.php';  ?>

 <link rel="stylesheet" type="text/css" href="../test.css">

  
			
		<div class='uploadmainscreen' >
        <h1>Add Mainscreen News Image</h1><br>
        <form action='../includes/mainscreenimage.upload.inc.php' method='post' enctype="multipart/form-data">
          <input  type='file' name='file'> <br><br>



          <input  type='submit' name='submit' class='login login-submit' value='UPLOAD'>
        </form>		
		
		</div>
		
		<div class='uploadmainscreen' >

	
         <?php

			$dir = '../images/TV';
			$x = 1;



			if ($opendir = opendir($dir))

			{		while (($file = readdir($opendir)) !== FALSE)
								
							{
							
							
							
							
							if($file!='.'&&$file!='..'&&$file!='...')  {	
							
								?> <?php
							
								echo "<form id='mainscreenuploadinputform' action='../includes/mainscreenimage.amend.delete.php' method='post'>";
									
									echo "<input id='topnum' type='text' readonly value=' ".$x ++."'>";
								
									
									echo "<img src=$dir/$file. height='auto' width='100%' >";
							
									echo "<input readonly type='text' name='filepath' value='".$file."'>";
								
									echo "<input  type='submit' name='archive' class='login login-update' value='Archive'>";
									
								
									
									echo "</form>";
									
											} 
							}}


	


	?>           
                    
             
               

                
    </div>
	
		<div class='uploadmainscreen' >
        <h1>To the Archive</h1><br>
       
          <a href="mainscreenimage.upload.archive.php"><input  type='submit' name='submit' class='login login-submit' value='To the Archive'></a>
		</div>
  <?php  include '../includes/footer.php'; ?>

