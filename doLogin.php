<?php
	session_start();
	include "connect.php";
	mysql_select_db("logdat");
	// validasi login
	$nama = $_REQUEST["username"];
	$pass = $_REQUEST["password"];
	
	if ( $nama == "" ) {
		//echo "username must be filled";
		header("location:login.php?err=username must be filled");
	}
	else if ( $pass == "" ) {
		header("location:login.php?err=password must be filled");
	}
	else {		
		$pass = md5($pass);
		
		$query = "select * from msuser where username = '$nama' and password = '$pass'";
		$rs = mysql_query($query);
		
		if ( mysql_num_rows($rs) == 1 ) {
			// jika bener
			// session buat nampung nama user yg login
			$_SESSION["user"] = $nama;
			header("location:home.php");
		}
		else {
			//jika salah
			header("location:login.php?err=wrong password");
		}
		
	}
?>