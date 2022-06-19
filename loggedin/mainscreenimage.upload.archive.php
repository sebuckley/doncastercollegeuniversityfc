<?php include '../includes/header.php';  ?>
 <link rel="stylesheet" type="text/css" href="../test.css">
  
			
	
		

		
		<div class='mainscreenarchive' >

	
         <?php

			$dir = '../images/tvarchive';
			$x = 1;



			if ($opendir = opendir($dir))

			{		while (($file = readdir($opendir)) !== FALSE)
								
							{
							
							
							
							
							if($file!='.'&&$file!='..'&&$file!='...')  {	
							
								?> <?php
							
								echo "<form id='mainscreenuploadinputform' action='../includes/mainscreenimage.archive.amend.delete.php' method='post'>";
									
									echo "<input id='topnum' readonly type='text' readonly  value=' ".$x ++."'>";
								
									
									echo "<img src=$dir/$file. height='auto' width='100%' >";
							
									echo "<input  type='text' readonly name='filepath' value='".$file."'>";
								
									echo "<input  type='submit' name='reuse' class='login login-update' value='Re-Use'>";
									echo "<input  type='submit' name='delete' class='login login-delete btn-danger' value='Delete'>";
								
									
									echo "</form>";
									
											} 
							} 
							
							} 


	


	?>           
                    
             
               

                
    </div>
	
	<div class='uploadmainscreen' >
        <h1>Manscreen Images</h1><br>
       
          <a href="mainscreenimage.upload.develop.php"><input  type='submit' name='submit' class='login login-submit' value='Back to Main Screen Images'></a>
		</div>
 
  <?php  include '../includes/footer.php'; ?>

