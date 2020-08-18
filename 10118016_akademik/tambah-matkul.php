<?php
include ('koneksi/koneksi.php');
?>

<title>TAMBAH MATA KULIAH - PRAKTEK BASIS DATA 2</title>

<fieldset>
	<form action="simpan-matkul.php" method="POST">
		<label>Kode Mata Kuliah</label><br>
		<input type="text" name="kode_MK"><br>
		<label>Nama Mata Kuliah</label><br>
		<input type="text" name="namamk"><br>
		<label>SKS</label><br>
		<input type="text" name="SKS"><br>
		<input type="submit" name="Submit" value="Simpan Data">

	</form>

</fieldset>