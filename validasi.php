<?php
session_start();
include"koneksi.php";

$username = $_POST["Username"];
$password = $_POST["Password"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE Username='$username' AND Password='$password'");
if(mysqli_num_rows($query) > 0 ){
		$_SESSION['Username'] = $username;
		header ("location: beranda.php");
	} else {
		header("location: index.php");
	}
?>