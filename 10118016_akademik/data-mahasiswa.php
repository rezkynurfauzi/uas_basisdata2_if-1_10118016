<?php
include 'koneksi/koneksi.php';
?>

<title>DATA MAHASISWA - PRAKTEK BASIS DATA 2</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

<center>
<table border=1>
	<h1>Data Mahasiswa</h1>
	<tr>
		<th>NIM</th>
		<th>NAMA MAHASISWA</th>
		<th>TANGGAL LAHIR</th>
		<th>JENIS KELAMIN</th>
		<th>ALAMAT</th>
        <th>TOOLS</th>
	</tr>
</center>
	<?php
	$read = "SELECT * FROM `tb_mahasiswa`"; 
	$query = mysqli_query($db, $read);
	$a = 0;
	while($row = mysqli_fetch_array($query)){
		$nim = $row['nim'];
		$nama = $row['nama_mhs'];
		$tgl = $row['tgl_lahir'];
		$jk = $row['jk'];
		$alamat = $row['alamat'];
    ?>

    <tr>
    	<td><?php print($nim);?></td>
    	<td><?php print($nama);?></td>
    	<td><?php print($tgl);?></td>
    	<td><?php print($jk);?></td>
    	<td><?php print($alamat);?></td>
    	<td><a href="edit-mhs.php?nim=<?php print($nim);?>">Edit</a> Atau <a href="hapus-mhs.php?nim=<?php print($nim);?>">Delete</a></td>
    </tr>

    <?php
    $a++;
    }
    ?>
</table><br>
<br>
<br>
<br>
    <form action="tambah-mahasiswa.php" method="POST">
        <button class="tombol">Tambah Mahasiswa</button>
    </form>
    <form action="index.php" method="POST">
        <button class="tombol">Home</button>
    </form>