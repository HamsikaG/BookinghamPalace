<?php session_start();
	$link=mysqli_connect("localhost","root","")or die("Can't Connect...");
			
	mysqli_select_db($link,"shop") or die("Can't Connect to Database...");
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	$qr= "select * from rating where b_id=$id";
	$qavg = "select rating,count(1) from rating where b_id= $id group by rating";
	
	$res=mysqli_query($link,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);	
	
	$res1=mysqli_query($link,$qr) or die("Can't Execute Query..");
	
	
	$resavg=mysqli_query($link,$qavg) or die("Can't Execute Query..");
	
	

	 
     

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>


    <link href="style.css" rel="stylesheet" />
	
	 <script src="js/rating/jquery.js"></script>
    <script src="js/rating/jquery.rating.js"></script>
    	
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
		<?php
			include("includes/head.inc.php");		?>
			
			

	


<?php

$RatingSum=0;
$count=0;
$TotalLikeCount=0;
$FinalRating =0;

$row_cnt = mysqli_num_rows($resavg);


while($rowavg=mysqli_fetch_assoc($resavg))

{

           
    $RatingCount = $rowavg['rating']; 
    $likeCount =   $rowavg['count(1)']; 
	
	
    $RatingFact = $RatingCount * $likeCount;
	
	$TotalLikeCount = $TotalLikeCount + $likeCount;
	
	$RatingSum = $RatingSum + $RatingFact;


$count++;
}


If ($row_cnt>0){
$FinalRating = round(($RatingSum/$TotalLikeCount),2);
}

 
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
								
								
									<h1 class="title"><?php echo $row['b_nm'];?></h1>
									<div class="entry">
									
									
									
								 <?php
								 

$cnt=0;
$rvw="";
$newstr = "<br />\n";
$nstr = "**is the review given by:";

$TotalRvws="";
$nrmsg ="NO REVIEWS POSTED YET PLEASE..";

$rowcont= mysqli_num_rows($res1);





If  ($rowcont ==0 ) {
             $TotalRvws = "{$TotalRvws}{$newstr}{$nrmsg}";
	}


while ($row1= mysqli_fetch_assoc($res1)) {


$rvw = "{$rvw}{$newstr}{$row1['rvw']}{$nstr} {$row1['uname']}";

$cnt++;
	}    
	
	If ($rowcont >0 ){
     	
     $TotalRvws=$rvw; 
	}	
	
	
		  ?>
				

					
									
										<?php
				
										
										        
												echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
									 	 
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['b_img'].'" width="100">
														
													
													</td>
												</tr>
											
										
											
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="20%"><b>Book Name</b></td>
																<td width="6%">: </td>
																<td align="left"><b>'.$row['b_nm'].'</b></td>
																<tr valign="top">
																<td align="right" width="40%"><b>Survey Rating</b></td>
																<td width="6%">: </td>
																<td align="left"><b>'.$row['srating'].'</b></td>
																</tr>
															</tr>

															<tr> 
													
																		
															
														</table>
														
													</td>
												</tr>
												
											</table>
											
											
																													
												
														<tr valign="bottom" >
														
													  

													<tr>
																<td align="right"><b> Rating</b></td>
																<td>: </td>
																<b><td align="left"><b> '.$FinalRating.' </b> </td></b>
																
																
																
																
																
																<br><br>
																
																
															</tr>
												
																															
												
												<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Reviews</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
																						
												
												
												'.$TotalRvws.'
			                                 
												<br>
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 
											 
											 '.$row['b_desc'].'
																				

																														 

											
	
													
												<tr>
													<td><hr color="purple"></td>
												</tr>
												
												
																					
																							
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="WriteReview.php?id='.$row['b_id'].'&usrname='.$_SESSION['unm'].'">
													
													
													
													<img src="images/reviews.jpg"
													</a></td>';
												}
												else
												{
													echo '<td><br><a href="register.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>
											
											
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['status']))
									 
												 {
													
													
													 $query1="select * from booking where b_id = $id";
												     $res2=mysqli_query($link,$query1) or die("Can't Execute Query..");
		
												    $row_cnt = mysqli_num_rows($res2);
		
													 If ($row_cnt>0)
													 { 
													 echo ' **THIS BOOK IS  UNAVAILABLE AS IT IS ALREADY BOOKED';
													 }
													
													else
													{
													
												
													
													
													
													echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&cat='.$_GET['cat'].'&usrname='.$_SESSION['unm'].'&bid='.$row['b_id'].'">
													
														<img src="images/booknow.jpg">
													</a></td>';
													}
												}
												else
												{
													echo '<td><img src="images/addcart.jpg"><br><a href="register.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
											
																					
										?>
										
									
										
										
										
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
