<?php
session_start();
  $con= mysqli_connect("localhost","root","","st_joseph_db") or die("error");
   if(isset($_REQUEST['bt1'])){
       
        $a1=$_REQUEST['fid'];
		$a2=$_REQUEST['pass1'];
		$sel="select*from faculty where fac_id='$a1' and password='$a2'";
		$res= mysqli_query($con,$sel);    
         if($row=mysqli_fetch_array($res)){
		   
		    $_SESSION['fid']=$row['fac_id'];
			$_SESSION['fname']=$row['faculty_name'];
		           header("location:index.php");
		 }
		 else
			  {?>
			  	<script>alert("incorrect id or password");</script>
			  <?php }
			 }  
			?> 
   
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" >
<div class="row" style="height:500px;">
<div class="col-sm-3" style="height:500px;"></div>
<div class="col-sm-6" style="height:500px; text-align:center; font-size:24px; color:#006699; margin-top:250px;">
       <label>FACULTY ID</label>
	   <input type="text" name="fid" class="form-control" required />
       <label>PASSWORD</label>
	   <input type="password" name="pass1" class="form-control" required/>
	   <label id="lab1" class="alert alert-danger" style="display:none;">Incorrect Id or Password</label>
       <button name="bt1" type="submit" class="btn btn-default" style="margin-top:20px; background-color:#0066FF; color:#FFFFFF; border-color:#000000;">LOGIN!</button>
          <a href="index.php"><button type="button" class="btn btn-default" style="margin-top:20px; background-color:#0066FF; color:#FFFFFF; border-color:#000000;">Previous Page</button></a>


</div>
<div class="col-sm-3" style="height:500px;"></div>




</div>


</form>
<?php
 include("colfooter.php");


?>
</body>
</html>
