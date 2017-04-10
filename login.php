<?php
	include "connect.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
.sidebar1 {
	float: left;
	width: 180px;
	background: #FF9;
	padding-bottom: 10px;
	border: medium;
	border-color: #F93:
	box-shadow: 180;
}
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
	padding-left:0;
	padding-bottom: 5;
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
	color: #00F;
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 15px 5px 5px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: inherit;
	background: #FFC;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #FC3;
	color: #000;
	font-size: 18px;
}

#st {
	font-weight: bold;
	color: #30F;
	background-color: #FFFF99;
	text-align: center;
	font-size: 27px;
	border: 5px solid #F93;
	box-shadow: 180;
}
a:link {
	color: #42413C;
	text-decoration: none; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: none;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: underline;
}
#login {
	text-align: center;
	padding-left: 500px;
	padding-right: 500px;
}

</style>
</head>

<body>
<div id="log-header"><img src="Template/images/template_01.gif" width="139" height="121" alt="Logo" /><img src="Template/images/text_header.gif" alt="text" width="281" height="121" /><span class="text">PT. National Utility Helicopters</span></div>
<div id="log-header-menu"></div>
<div id="background"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="login"><form method="post" action="doLogin.php" >
	<table class="menutbl" width="200" border="1" align="center" cellspacing="10">
  <tr>
    <td colspan="2"><div align="center"><strong>NUH Login</strong></div></td>
  </tr>
  <tr>
    <td><strong>Username</strong></td>
    <td>
      <label>
        <input type="text" name="username" id="textfield" value="<?php if($_COOKIE != null) echo $_COOKIE['user'];?>"/>
      </label>
    </td>
  </tr>
  <tr>
    <td><strong>Password </strong></td>
    <td>
      <label>
        <input type="password" name="password" id="textfield2" value="<?php if($_COOKIE != null) echo $_COOKIE['pass'];?>"/>
      </label>
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<?php echo $_REQUEST['err'];?></td>
  </tr>
        <tr>
        	<td><input type="submit" name="txtSubmit" value="Login"></td>
            <td><input type="reset" name="txtReset" value="Reset"></td>            
        </tr>
    </table>
</form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>

  
</div>
</body>
</html>