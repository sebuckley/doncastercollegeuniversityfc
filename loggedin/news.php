		<?php include '../includes/header.php' ?>
		<?php 
		if (isset($_SESSION['id'])){
			include_once '../dbh.php';
		 $sql = "SELECT * FROM news;";
		 $records = mysqli_query($conn, $sql);?>
			
		<div class='login-card-newsinput' >
        <h1>Existing News</h1><br>
		<table class="newsinputform" width="100%">
	
		<?php
		 
		while ($row = mysqli_fetch_array($records)){
		
		
        echo "<tr><form id='newsinputform' action='../includes/news.amend.delete.php' method='post'>";
		echo "<tr>";
		echo "<th width='50%'>News Type</th><th style='padding-left:12px;'>News ID</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td  ><input type='text' name='newstype'  maxlength='10'  value='".$row['NewsType']."'></td>";
		echo "<td  ><input  readonly='true' type='number' name='NewsID' value='".$row['NewsID']."'></td>";
		echo "</tr>";
		echo "<tr style='margin-bottom:10px;'>";
		echo "<td style='padding-left:15px;' ><p style='color:grey;'>(Max Characters 10)</p></td>";
		echo "<td  ></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Line 1</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td colspan='4' ><input type='text' name='news1' maxlength='93' value='".$row['News1']."'></td>";
		echo "</tr>";
		echo "<tr style='margin-bottom:10px;'>";
		echo "<td style='padding-left:15px;' ><p style='color:grey;'>(Max Characters 93)</p></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Line 2</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td colspan='4' ><input type='text' name='news2' maxlength='93'  value='".$row['News2']."'></td>";
		echo "</tr>";
		echo "<tr style='margin-bottom:10px;'>";
		echo "<td style='padding-left:15px;' ><p style='color:grey;'>(Max Characters 93)</p></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td style='padding-right:5px;'><input  type='submit' name='update' class='login login-update' value='Update'></td>";
		echo "<td style='padding-left:5px;'><input  type='submit' name='delete' class='login login-delete btn-danger' value='Delete'></td>";
		echo "</tr>";
		echo "</form></tr>";
		}
		?>
		</table>
		</div>
		<?php include 'createplayer.php';
			}else {
				echo "You were unsuccesful in logging in.";
    }
	
	
?>	<br>

		<?php include '../includes/footer.php' ?>
		
