<?php
    include "koneksi/koneksi.php";
        $nip = $_POST['nip'];
        $nama = $_POST['nama_dosen'];
        $query = "INSERT INTO `tb_dosen` (`nip`, `nama_dosen`) VALUES ('$nip', '$nama')";
        $hasil = mysqli_query($db, $query);
    header('location: data-dosen.php');
?>