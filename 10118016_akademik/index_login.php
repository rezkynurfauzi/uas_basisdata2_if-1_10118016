<?php
    session_start();
    require_once("koneksi/koneksi.php");
        $username = $_POST['username'];
        $password = $_POST['password'];   
        $sql = "SELECT * FROM tb_login WHERE username = '$username'";
        $query = $db->query($sql);
        $hasil = $query->fetch_assoc();
    if($query->num_rows == 0) {
        echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
        } else {
    if($password <> $hasil['password']) {
        echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
        } else {
        $_SESSION['username'] = $hasil['username'];
        header('location:index.php');
        }
    }
?>