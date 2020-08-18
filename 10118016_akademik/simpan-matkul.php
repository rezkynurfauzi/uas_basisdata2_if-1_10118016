<?php
include "koneksi/koneksi.php";
$kodemk = $_POST['kode_MK'];
$namamk = $_POST['nama_MK'];
$SKS = $_POST['SKS'];

$query = "INSERT INTO `matakuliah` (`Kode_MK`, `Nama_MK`, `SKS`) VALUES ('$kodemk', '$namamk', '$SKS')";

$hasil = mysqli_query($db, $query);
header('location: data-matkul.php');
?>