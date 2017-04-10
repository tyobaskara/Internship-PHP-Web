<?php
	session_start();
	include "connect.php";
	
	if($_SESSION['user'] == "")
	{ 
		header("location:login.php");
	}
	
$inactive = 600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location:login.php");
    }
}
$_SESSION['timeout'] = time();
 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#konten {
	background-color: #FFC;
	margin: 20px;
	padding: 5px;
	float: left;
	height: 500px;
	width: 750px;
	border: 1px solid #F93;
}
</style>
</head>

<body>
<div id="log-header"><img src="Template/images/template_01.gif" width="139" height="121" alt="Logo" /><img src="Template/images/text_header.gif" alt="text" width="281" height="121" /><span class="text">PT. National Utility Helicopters</span></div>

<div id="log-header-menu">&nbsp;Welcome, 
	<?php echo $_SESSION["user"]; ?>
<div id="logout"><a href="doLogout.php">Logout</a></div>
</div>
<div id="log-utama">
  <div class="sidebar1"> 
    <ul class="nav">
      <li>
        <div id="st">Inventory :</div>
      </li>
    </ul>
    <ul class="nav">
      <li><a href="partnumber.php"><strong>Search : Part Number</strong></a></li>
      <li><a href="nomenclature.php"><strong>Search : Nomenclature</strong></a></li>
      <ul class="nav">
      <li>
        <div id="st">Historical Record :</div>
      </li>
    </ul>
      <li></li>
      <li><a href="historicalrecord.php"><strong>Search : Part Number</strong></a></li>
      <li><a href="serialnumber.php"><strong>Search : Serial Number</strong></a>
        <!-- end .sidebar1 -->
      </li>
    </ul>
  </div>
  
  <div id="konten"><strong><em>Last Updated 10 Desember 2012</em></strong></div>
  
  <div class="sidebar1"> 
    <ul class="nav">
      <li>
        <div id="st">Calibration :</div>
      </li>
    </ul>
    <ul class="nav">
      <li><a href="calibrationcheck.php"><strong>Check</strong></a></li>
       <li><a href="calibration.php"><strong>List</strong></a></li>
      <ul class="nav">
      <li>
        <div id="st">Shelf Life :</div>
      </li>
    </ul>
      <li></li>
      <li><a href="#.php"><strong>Check</strong></a></li>
    </ul>
  </div>
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="footer" align="center">COPYRIGHT  &copy; Baskara</div>

</body>
</html>