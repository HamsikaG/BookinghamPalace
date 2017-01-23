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
							<h1 class="title"></h1>
							<div class="entry">
							
								<table  align="center" width="100%">
										<tr  bgcolor="#EEE9F3">
										
										
									<td align="center" width="100%"><b>Student And Mentor Team</b></td>
										</tr>
										
										<tr><td><br><br></td></tr>
								<tr>
									<td 
												<strong><font color="#433" size="4">Mentor:</font></strong><br><br>
														<B>G.Hamsika</B><BR><br>
														<UL>
														<LI>Mobile No.<font color="purple">  1111111111</font></LI>
														</UL>													
												</strong>
									
												<strong><font color="#433" size="3">Student:</font></strong><br><br>
														<U><B>G.Hamsika   :</B></U><BR><br>
														<UL>
														<LI>Mobile No.<font color="purple">  1111111111</font></LI>
														</UL>													
												</strong>										
											   <strong>Thanks CBIT!!!!.............</strong><font color="purple">It's really great to Study here.</font></center
									</td>
								</tr>
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
