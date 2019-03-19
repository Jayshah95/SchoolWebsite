<?php
session_start();


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
   <style>
a
{
	color:#FFFFFF;
}
.submenu:hover{
   color:#000000;
}



</style>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<div  style="height:250px;">
<div style="height:20%; background-color:#0033FF">

<a href="https://twitter.com/login"><img src="twitter_PNG1.png" height="30px" style="border-radius:10px; float:right; margin-right:80px;" /></a>
<a href="https://in.linkedin.com/"><img src="linkedin logo.png" height="30px" style="border-radius:10px; float:right;margin-right:6px;" /></a>
<a href="https://www.facebook.com/"><img src="fb-art.png" height="30px" style="border-radius:10px; float:right;margin-right:6px;" /></a>


</div>
<div style="height:55%;" class="row">
<div class="col-sm-1" style="height:100%;"></div>
<div class="col-sm-1" style="height:100%;"><img src="logostjoseph.jpg" height="100%"/></div>
<div class="col-sm-3" style="color:#0000CC; font-size:34px;font:'Times New Roman', Times, serif;"><center><font size="+3" color="#000099">ST.JOSEPH'S COLLEGE</font><br /><font size="+3" >AUTONOMOUS </font><br /><font  color="#000033" style="font-size:16px;">ESTD.1992</font></center></div>
<div class="col-sm-1"></div>
<?php if(isset($_SESSION['sname']))
{?>

<div class="col-sm-6 row" >
     <div class="col-sm-4" style="text-align:center;">Welcome <?php echo $_SESSION['sname'];?></div>
	
       <div class="col-sm-4" style="text-align:center;"><a href=""><img src="faculty login.png" height="50px" style=" margin-top:50px;" /></a><br />Profile</div>
  
	     <div class="col-sm-4" style="text-align:center;"><button type="submit" class="btn btn-default" ><a href="logout.php">Logout</a></button></div>
</div>

<?php

}
else
{
?>

<div class="col-sm-6 row" >
     <div class="col-sm-4" style="text-align:center;"><a href="ststulogin.php"><img src="studentlogin.png" height="50" style="margin-top:50px;" /></a><br />Student Login</div>
	  
	     <div class="col-sm-4" style="text-align:center;"><a href=""><img src="alumniicon.png" height="50px" style="margin-top:50px;" /></a><br />Alumni</div>
       <div class="col-sm-4" style="text-align:center;"><a href="stfaclogin.php"><img src="faculty login.png" height="50px" style=" margin-top:50px;" /></a><br />Faculty Login</div>

</div>

<?php

}

?>

</div>

<div style="height:26%; background-color:#0033FF;" class="row">

<div class="col-sm-2" ></div>
<div class="col-sm-9" id="dh" style=" text-align:center;color:#FFFFFF; font-size:20px; margin-right:6px; font:'Times New Roman', Times, serif; margin-top:14px; display:block; ">
	

<nav class="navbar navbar-default" style="background-color:#0033FF; border:none;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="submenu"><a href="#" style="text-decoration:none;color:#FFFFFF;">Home</a></li>
	   <li class="submenu"><a href="#" style="text-decoration:none;color:#FFFFFF;">About Us</a></li>
	   <li class="dropdown submenu"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="text-decoration:none;">Student Support<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li class="dropdown submenu"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="text-decoration:none;color:#FFFFFF;">Academics<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
   
	<li class="submenu"><a href="#" style="text-decoration:none;color:#FFFFFF;">News & Events</a></li>
	<li class="submenu"><a href="#" style="text-decoration:none;color:#FFFFFF;">Contact Us</a></li>
	<li class="submenu"><a href="#" style="text-decoration:none;color:#FFFFFF;">Nirf</a></li>
	<li class="submenu"><a href="#" style="text-decoration:none;color:#FFFFFF;">Bjes Institutions</a></li></ul>
  </div>
</nav>

</div>



</div>


</div>
   
  
  
</body>
</html>
