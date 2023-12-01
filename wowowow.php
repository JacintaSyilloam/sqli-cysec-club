<?php

session_start();

if (!$_SESSION['wowowow']) {
	header("Location: admin_login.php");
}

?><!DOCTYPE html>
<html lang="en">

<head>
	<title>SQLI succeeded</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	
	<h1 style="text-align: center">FLAG 1 = FLAG{w3lc0m3_to_cys3c_club_h3h3}</h1>
	<hr>
	
	<h3>You succeeded in doing SQL injection!</h3>
	
	<p>Can you find other flags?</p>

	<a href="index.php">Explore MyIT blog</a>

	<br><br><br><br>
	<br><br><br><br>

	<p style="color: #ffffff">First half of FLAG 2 = FLAG{i_f0un<p>
	
</body>

</html>
