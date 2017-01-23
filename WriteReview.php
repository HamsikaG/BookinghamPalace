<?php session_start();
	$link=mysqli_connect("localhost","root","")or die("Can't Connect...");
			
	mysqli_select_db($link,"shop") or die("Can't Connect to Database...");
	


	
		$id=$_GET['id'];
		
		
		
	
	$q="select * from book where b_id=$id";

	$res=mysqli_query($link,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
	
	$bookname=$row['b_nm'];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="site.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
 
    <script src="js/rating/jquery.js"></script>
    <script src="js/rating/jquery.rating.js"></script>
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
									
									
									<h1 align="center">Review Book:<br><u><?php echo $row['b_nm'];?></u></h1>
									
									
									
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['submit']))
											{
												echo '<font color="blue">You have Submitted your review Successfully..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
											 <!-- start page -->
																					 
																				
											<form action="process_review.php" method="POST">
											
											<tr><td><input type="hidden"  name= "bookname" value= "<?php echo $bookname;?>"></td></tr>
											   														
													<br>														
													<b> <input type="text" placeholder="Review Title*" class="form-control" name="rvwtle"></b>
													<br>
													 <b><textarea placeholder="Your Review*" class="form-control" rows="3" name="rvw"></textarea></b>
												
													 <br>
													 
													
													<td><b>Your Rating:</b>&nbsp;&nbsp;</td>
													
													<td>													
													<input name="rating"  value = 1 type="radio" id="1" class="star"/>
													<input name="rating"  value = 2 type="radio" id="2" class="star"/>
													<input name="rating"  value = 3 type="radio" id="3" class="star"/>
													<input name="rating"  value = 4 type="radio" id="4" class="star"/>
													<input name="rating"  value = 5 type="radio" id="5" class="star"/></td>
													
												     
																									
												<br>
												
												
											
												
																						
												<tr><td>&nbsp;</tr>
													<tr> 									 
												<td>
												<b><input  type="submit" name= "submit" </b>	
											</td>							
											
												</tr>	


					

											<tr><td>&nbsp;</tr>
													<tr> 									 
												<td>
												<input type="hidden" name= "lname" value= <?php echo $_GET['usrname'];?>	
											</td>							
											
												</tr>	
												
												
												

											<tr><td>&nbsp;</tr>
													<tr> 									 
												<td>
												<input type="hidden" name= "bookid" value= <?php echo $_GET['id'];?>
												
												</td>	
												
																						
											
												</tr>	

												
												
												
												</form>
											
										</table>
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
