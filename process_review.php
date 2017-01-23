<?php
		
if(!empty($_POST))
	{
	          
			$rvwtle=$_POST['rvwtle'];
			$rvw=$_POST['rvw'];
			$rating=$_POST['rating'];
			$usrname=$_POST['lname'];
			$bookid=$_POST['bookid'];
			$bookname=$_POST['bookname'];
           	
								
			$link=mysqli_connect("localhost","root","")or die("Can't Connect...");
			
			mysqli_select_db($link,"shop") or die("Can't Connect to Database...");
			
			$query="insert into rating(bname,rvwtle, rvw,rating,uname,rdate,b_id)
			values('$bookname','$rvwtle','$rvw',$rating,'$usrname',curdate(),$bookid)";
			
		     mysqli_query($link,$query) or die("Can't Execute Query...");
			 
			header("location:reviews.php?$bookname");
		}

	
		
?>