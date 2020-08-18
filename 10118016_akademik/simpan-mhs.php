<?php
include "koneksi/koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama_mhs'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO `tb_mahasiswa` (`nim`, `nama_mhs`, `tgl_lahir`, `jk`, `Alamat`) VALUES ('$nim', '$nama', '$tgl_lahir', '$jk', '$alamat')";

$hasil = mysqli_query($db, $query);
header('location: data-Mahasiswa.php');
?>