<?php
	date_default_timezone_set("Asia/Jakarta");
	$Open	=mysql_connect("localhost","root","");
	if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
	}
	$Koneksi	=mysql_select_db("db_tutorial");
	if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
	}
?>