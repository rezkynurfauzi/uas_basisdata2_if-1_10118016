<?php
	include 'koneksi/koneksi.php';
?>

	<title>DATA MATA KULIAH - PRAKTEK BASIS DATA 2</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
<center>
<table border=1>
	<h1>DATA MATA KULIAH</h1>
	<tr>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>SKS</th>
		<th>TOOLS</th>
	</tr>
</center>
	<?php
	$read = "SELECT * FROM `tb_matkul`"; 
	 $query = mysqli_query($db, $read);
	 $a = 0;
	 while($row = mysqli_fetch_array($query)){
	 	$kodemk = $row['Kode_MK'];
	 	$namamk = $row['Nama_MK'];
	 	$sks = $row['SKS'];
	 
    ?>

    <tr>
    	<td><?php print($kodemk);?></td>
    	<td><?php print($namamk);?></td>
    	<td><?php print($sks);?></td>
		<td><a href="edit-matkul.php?Kode_MK=<?php print($kodemk);?>">Edit</a> Atau <a href="hapus-matkul.php?Kode_MK=<?php print($kodemk);?>">Delete</a></td>
    	
    </tr>


    <?php
    $a++;
   	}
   	?>
</table>
<br>
<br>
<br>
<br>
<form action="tambah-matkul.php" method="POST">
<button class="tombol">Tambah Matakuliah</button>
</form>
<form action="index.php" method="POST">
<button class="tombol">Home</button>
</form>