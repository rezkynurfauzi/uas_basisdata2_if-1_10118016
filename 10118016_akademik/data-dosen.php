<?php
    include 'koneksi/koneksi.php';
?>

<title>DATA DOSEN - PRAKTEK BASIS DATA 2</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

<center>
<table border="1">
	<h1>Data Dosen</h1>
	<tr>
		<th>NIP</th>
		<th>NAMA DOSEN</th>
        <th>TOOLS</th>
	</tr>
</center>
	<?php
	$read = "SELECT * FROM `tb_dosen`"; 
	$query = mysqli_query($db, $read);
	$a = 0;
	while($row = mysqli_fetch_array($query)){
	    $nip = $row['nip'];
	    $nama = $row['nama_dosen'];
	?>

    <tr>
    	<td><?php print($nip);?></td>
    	<td><?php print($nama);?></td>
    	<td><a href="edit-dosen.php?nip=<?php print($nip);?>">Edit</a> Atau <a href="hapus-dosen.php?nip=<?php print($nip);?>">Delete</a></td>
    </tr>

<?php
    $a++;
    }
?>
</table>
<br>
<br>
<br>
    <form action="tambah-dosen.php" method="POST">
        <button class="tombol">Tambah Dosen</button>
    </form>
    <form action="index.php" method="POST">
        <button class="tombol">Home</button>
    </form>