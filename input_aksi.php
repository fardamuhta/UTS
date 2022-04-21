<?php 
include 'koneksi.php';
$positif = $_POST['positif'];
$dirawat = $_POST['dirawat'];
$sembuh = $_POST['sembuh'];
$meninggal = $_POST['meninggal'];
$id_wilayah = $_POST['id_wilayah'];

 
mysqli_query($koneksi,"INSERT INTO pasien VALUES('','$positif','$dirawat','$sembuh','$meninggal','$id_wilayah')");
 
header("location:uts.php");
?>