<?php
    session_start();
    if(isset($_SESSION['username'])) {
    header('location:index.php'); }
    require_once("koneksi/koneksi.php");
?>

<html>
<head>
    <title>FORM LOGIN - PRAKTEK BASIS DATA 2</title>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>

<body>
    <div class="kotak_login">
        <p class="tulisan_login">LOGIN</p>
    <form action="index_login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Masukkan Username Anda !">
        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="Masukkan Password Anda !">
        <input type="submit" class="tombol_login" value="LOGIN">

    <br/>
    <br/>
    </form>
    </div>
</body>
</html>