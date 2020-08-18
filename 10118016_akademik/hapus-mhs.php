<?php
    include ("koneksi/koneksi.php");
        $nim = $_GET['nim'];
        $result = mysqli_query($db, "DELETE FROM tb_mahasiswa WHERE nim=$nim");
    header("Location:data-mahasiswa.php");
?>