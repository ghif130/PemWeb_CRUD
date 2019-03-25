<?php //include_once ('koneksi.php');$idvideo = $_GET['idvideo'];$query = "DELETE FROM vidio WHERE idvideo=['$idvideo']";header ('location: beranda.php');?>

<?php 
include_once("koneksi.php"); 
$idvideo = $_GET['idvideo']; 
$result = mysqli_query($conn, "DELETE FROM video WHERE idvideo=$idvideo"); 
header("Location:beranda.php"); ?>