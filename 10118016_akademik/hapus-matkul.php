<?php
// include database connection file
include ("koneksi/koneksi.php");

// Get id from URL to delete that user
$kode_MK = $_GET['Kode_MK'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM tb_matkul WHERE Kode_MK=$kode_MK");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location: data-matkul.php");
?>