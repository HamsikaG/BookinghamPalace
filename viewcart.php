<?php session_start();?>

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
							<h1 class="title">Booked Details...</h1>
							
                            
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="index.php" >
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Book Name
									<td> <b>Qty
									<td> <b>user
									</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> '.$x['qty'].'
											<td> '.$x['usrname'].'
											
											
										</tr>
										';
										
										$tot = $tot + $x['qty'];
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Visit " >
							</center>
							</form>
							</div>
							
						</div>
						
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
