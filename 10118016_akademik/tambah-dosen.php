<?php
    include ('koneksi/koneksi.php');
?>

    <title>TAMBAH DOSEN - PRAKTEK BASIS DATA 2</title>

<fieldset>
	<form action="simpan-dosen.php" method="POST">
		<label>NIP</label><br>
		<input type="text" name="nip"><br>
		<label>Nama Dosen</label><br>
		<input type="text" name="nama_dosen"><br>
		<input type="submit" name="Submit" value="Simpan Data">
	</form>
</fieldset>