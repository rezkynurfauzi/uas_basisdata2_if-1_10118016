<?php
include ('koneksi/koneksi.php');
?>

	<title>TAMBAH MAHASISWA - PRAKTEK BASIS DATA 2</title>

<fieldset>
	<form action="simpan-mhs.php" method="POST">
		<label>NIM</label><br>
		<input type="text" name="nim"><br>
		<label>Nama Mahasiswa</label><br>
		<input type="text" name="nama_mhs"><br>
		<label>Tanggal Lahir</label><br>
		<input type="date" name="tgl_lahir"><br>
		<label>Jenis Kelamin</label><br>
		<input type="radio" name="jk" value="Laki - Laki"> 
  	    <label>Laki - Laki </label><br>
 		<input type="radio" name="jk" value="Perempuan">
 		<label>Perempuan </label><br>
		<label>Alamat</label><br>
		<input type="text" name="alamat"><br>
		<input type="submit" name="Submit" value="Simpan Data">
	</form>
</fieldset>