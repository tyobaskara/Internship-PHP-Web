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
<title>Historical Record</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.content {
	padding: 10px 0;
	width: 780px;
	float: left;
}
.add {	color: #333;
}
.add {	font-weight: bold;
}
.change {	font-weight: bold;
	color: #333;
}
.delete {	font-weight: bold;
	color: #333;
}
a:link {
	color: #333;
	text-decoration: none; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #333;
	text-decoration: none;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: underline;
	color: #333;
}

</style>
</head>

<body>
<div id="log-header"><img src="Template/images/template_01.gif" width="139" height="121" alt="Logo" /><img src="Template/images/text_header.gif" alt="text" width="281" height="121" /><span class="text">PT. National Utility Helicopters</span></div>
<div id="log-header-menu">&nbsp; <a href="home.php">Home</a> || <span class="tes">Inventory :</span> <a href="partnumber.php">Part Number</a>  | <a href="nomenclature.php">Nomenclature</a> || <span class="tes">Historical Record:</span> <a href="historicalrecord.php">Part Number</a> | <a href="serialnumber.php">Serial Number</a> |<a href="doLogout.php"> Logout</a></div>
<div id="log-utama">
  <form method="get" action="historicalrecord2.php">
		  <p> <strong>&nbsp;(Historical Record ) </strong>Search by Part Number<strong> :</strong> 
		    <input type="text" name="search" id="search"/>
            <input type="submit" value="Go"/>
          </p>
		  <p>&nbsp;</p>
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>