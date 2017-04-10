<?php
$host = "localhost"; //alamat host mysql
$user = "root"; //username mysql
$pass = ""; //password mysql ()
$db  = "logdat"; //nama database yang digunakan
 
$connect = mysql_connect($host,$user,$pass); //menghubungkan ke mysql
$sukses = mysql_select_db($db,$connect); //memilih database yang digunakan

if(!$connect)
	{
		die("Failed to connect because".mysql_error());
	}
	
?>