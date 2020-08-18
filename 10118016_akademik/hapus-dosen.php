<?php
    include ("koneksi/koneksi.php");
        $nip = $_GET['nip'];
        $result = mysqli_query($db, "DELETE FROM tb_dosen WHERE nip=$nip");
    header("Location: data-dosen.php");
?>