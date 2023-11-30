<?php

session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");

	if(($password) == "' or '1'='1") {
		die("SQLI detected, hayo ngapain ke sini >:0");
	}

	if (mysqli_num_rows($login) == 0) {
		die("Username atau password salah!");
	} else {
		$_SESSION['admin'] = 1;
		header("Location: admin.php");
	}
	
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style>
		body {
			font-family: 'Lucida Sans Unicode', sans-serif;
			margin: 0;
			padding: 0;
		}

		.wrapper {
			background-color: #013880;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			position: relative;
		}

		.container {
			background-color: #809cc0;
			border-radius: 8px;
			box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
			width: 250px;
			padding: 20px 40px;
			text-align: center;
			display: flex;
			flex-direction: column;
			align-items: center;

			position: relative; /* Added */
		}

		.logos {
			display: absolute;
			width: 100%;
			justify-content: space-around;
			margin-bottom: 20px;
		}

		.logo,
		.myits-sso {
			width: 40%;
			height: auto;
		}

		.logo {
			margin-right: 34px;
			margin-left: 10px;
		}

		.myits-sso {
			margin-right: 10px;
		}

		h1 {
			color: #262626;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
		}

		p {
			margin: 10px 0;
			color: #efc412;
		}

		.input-group {
			width: 100%;
			margin-bottom: 10px;
			text-align: left;
		}

		.input-group label {
			display: block;
			color: #efc412;
			font-size: 12px;
		}

		.input-group input,
		.input-group .sign-in-button {
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
			border: none;
			box-sizing: border-box;
			background-color: transparent;
			color: white;
			font-size: 15px;
			border-bottom: 1px solid white;
		}

		.input-group input:focus {
			outline: none;
			border-bottom: 1px solid #efc412;
		}
		
		.input-group .sign-in-button {
			display: block;
			width: 100%;
			padding: 10px;
			border: none;
			box-sizing: border-box;
			background-color: #f1c40f;
			cursor: pointer;
			font-weight: bold;
			color: #001f3f;
			text-align: center;
		}

		.input-group .sign-in-button:hover {
			background-color: #f39c12;
			color: #003366;
		}


		input[type="submit"] {
			background-color: #f1c40f;
			cursor: pointer;
			font-size: 12px;
			font-weight: bold;
			color: #013880;
			width: 100%;
			border: none;
			border-radius: 6px;
			padding: 10px 0 10px 0;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			transition: 0.5s background-color;
		}

		input[type="submit"]:hover {
			background-color: #f39c12;
			color: #003366;
		}

		.options {
			display: table;
			width: 100%;
			margin-top: 10px;
		}

		.options-row {
			display: table-row;
		}

		.options-cell {
			display: table-cell;
		}

		.options-cell a {
			font-size: 12px;
		}

		.options a {
			color: #ffffff;
			text-decoration: none;
			cursor: pointer;
		}

		.options a:hover {
			color: #efc412;
		}
		
		footer {
			position: absolute;
			bottom: 120px;
			width: 100%;
			text-align: center;
			font-size: 10px;
		}

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
			<div class="logos">
                <img src="logo.png" alt="" class="logo" >
                <img src="myits-sso-white.png" alt="" class="myits-sso">
            </div>
            <form action="" method="post">
				<div class="input-group">
					<label for="username">myIT ID</label>
					<input type="text" name="username" id="username" required>
				</div>

				<div class="input-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" required>
				</div>

				<input type="submit" name="submit" class="sign-in-button" value="Sign In">

				<br>

				<!-- Forgot Password and Language Options -->
				<span class="options">
					<span class="options-row">
						<span class="options-cell" style="text-align: left;">
							<a href="#">Forgot Password?</a>
						</span>
						<!-- Second half of FLAG 2 = d_an0th3r_1036} -->
						<span class="options-cell" style="text-align: right;">
							<a href="#">EN</a>
							<a href="#" style="color: #809cc0;"></a>
						</span>
					</span>
				</span>
				<br>
			</form>
        </div>
		<footer>
			<p style="color: #ffffff">&copy; 2023 Ristek HMIT Cyber Security Club. v5.0.2.7</p>
		</footer>
    </div>
</body>

</html>