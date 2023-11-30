<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "sqli";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $db);