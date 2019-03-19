<?php
  session_start();
     $con= mysqli_connect("localhost","root","","st_joseph_db") or die("ERROR") ;
	   if(isset($_REQUEST['btn'])){
	       $p1=$_REQUEST['sid'];  
	        $p2=$_REQUEST['pass'];
	          $sel= "select*from students where sid='$p1' and password='$p2'";
			  $res= mysqli_query($con,$sel);
			  if($row= mysqli_fetch_array($res)){
			       $_SESSION['sid']= $row['sid'];
				   $_SESSION['sname']=$row['stuname'];
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
<title>Student Login</title>
</head>

<body>
<form method="post" >
<div class="row" style="height:500px;">
<div class="col-sm-3" style="height:500px;"></div>
<div class="col-sm-6" style="height:500px; text-align:center; font-size:24px; color:#006699; margin-top:250px;">
       <label>STUDENT ID</label>
	   <input type="text" name="sid" class="form-control" required />
       <label>PASSWORD</label>
	   <input type="password" name="pass" class="form-control" required/>
	          <button name="btn" type="submit" class="btn btn-default" style="margin-top:20px; background-color:#0066FF; color:#FFFFFF; border-color:#000000;">LOGIN!</button>
   <a href="index.php"><button name="btn2" type="button" class="btn btn-default" style="margin-top:20px; background-color:#0066FF; color:#FFFFFF; border-color:#000000;">Previous Page</button></a>


</div>
<div class="col-sm-3" style="height:500px;"></div>




</div>


</form>
<?php
 include("colfooter.php");


?>

</body>
</html>
