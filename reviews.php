<?php session_start();
	$link=mysqli_connect("localhost","root","")or die("Can't Connect...");
			
	mysqli_select_db($link,"shop") or die("Can't Connect to Database...");
	
	
	$q= "select * from rating" ;
	
	
	$res=mysqli_query($link,$q) or die("Can't Execute Query..");
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->
<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">  Welcome to Book Reviews!!!
							
							</h1>
							<div class="entry">
								<br>
								<p>
								<strong><font color="#433" size="3">
								Write Review. Help Others find good Books..!!!								
								 </font></strong><br><br> 
								</p>
								
							</div>
							
						</div>
				
						
	<table border="5" style= "background-color: #84ed86; color: #761a9b;font color="#433" size="10"; margin: 0 auto;" >
      <thead>
        <tr>
		   <th><strong><font color="#761a9b" size="4">Book Name</th>
          <th><strong><font color="#761a9b" size="4">Title</th>
          <th><strong><font color="#761a9b" size="4">User Review</th>
          <th><strong><font color="#761a9b" size="4">Rating</th>
          <th><strong><font color="#761a9b" size="4">User</th>
		  <th><strong><font color="#761a9b" size="4">Review Date</th>
                   
        </tr>
      </thead>
      <tbody>
	  
	  
	  <?php
          while ($array = mysqli_fetch_row($res)){
         print "<tr> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> <td>";
        echo $array[4]; 
        print "</td> <td>";
		echo $array[5]; 
        print "</td> <td>";
		echo $array[6]; 
        print "</td> </tr>";
		
          }
        ?>
		</tbody>
		</table>
	
						
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
