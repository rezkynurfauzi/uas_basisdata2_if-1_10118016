<?php
   session_start();
   session_destroy();
?>
<title>LOG OUT - PRAKTEK BASIS DATA 2</title>
<div align="center">
  <h2>Anda telah berhasil logout !</h2>
        <form action="login.php" method="POST">
            Silahkan Klik <button class="tombol"> Disini </button> Untuk Login Kembali !
        </form>
</div>