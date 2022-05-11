<?php include("header.php"); 
?>

<div class="hbg">&nbsp;</div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      	<?php
		$dblink = mysqli_connect("localhost","root","");
		if($dblink == false)
		{
			echo '<div class="article">Couldn\'t connect to database server</div>';
		}
		else // if there is a database connection
		{
			mysqli_select_db($dblink, "emp-data");
			
			$sql= "SELECT * FROM lot_details ORDER BY `date` DESC"; // bring articles from newest to oldest
			
			$result = mysqli_query($dblink, $sql);
			if($result == false) // if query failed, something in sql wrong
			{
				echo '<div class="article">Query error : '.$sql.'</div>';
			}
			else // if query succeed then we will fetch and display articles
			{
				while( $row = mysqli_fetch_array($result)) 
				{
					?>
                    <div>

					<div id="chart-container">

						<canvas id="mycanvas"></canvas>
						
						</div>

                    </div>
                    <?php
				}
				
			}
	
		}	
			
		?>

      </div>
      <?php include("sidebar.php"); ?>
      <div class="clr"></div>
    </div>
  </div>
  
  <?php include("footer.php"); ?>
  
  
  