<?php session_start();

"<script type='text/javascript'>alert('Please collect your book within 24 hours.');</script>";


            $link=mysqli_connect("localhost","root","")or die("Can't Connect...");
			
			mysqli_select_db($link,"shop") or die("Can't Connect to Database...");
			



	if(isset($_GET['nm']) and isset($_GET['cat']) and isset($_GET['usrname'])and isset($_GET['bid']))
	{
		//add item
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"cat"=>$_GET['cat'],"qty"=>"1","usrname"=>$_GET['usrname'],"bid"=>$_GET['bid']);
		
		$bname = $_GET['nm'];
		$cat = $_GET['cat'];
		$usrname = $_GET['usrname'];
		$bookid = $_GET['bid'];
				
		$query="insert into booking(bname,b_id, subcat_nm,uname,bkddate)
			values('$bname',$bookid,'$cat','$usrname',curdate())";
			
			mysqli_query($link,$query) or die("Can't Execute Query...");	

     
	 	
		header("location: bookedHistory.php?usr=$usrname&book=$bname");
		
          
		
	}


?>