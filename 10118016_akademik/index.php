<?php
    session_start();
    if(!isset($_SESSION['username'])) {
    header('location:login.php'); 
        } else { 
    $username = $_SESSION['username']; 
        }
?>

<html>
<head>
	<title>HOME - PRAKTEK BASIS DATA 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>

<body>
<div class="content">
	<header>
		<h1 class="judul">Akademik</h1>
		<h3 class="deskripsi">Data - Data Akademik</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="data-mahasiswa.php">Data Mahasiswa</a></li>
			<li><a href="data-dosen.php">Data Dosen</a></li>
			<li><a href="data-matkul.php">Data Mata Kuliah</a></li>
			<a href="logout.php"><b>Logout</b></a>
		</ul>
	</div>
	<div class="badan">	
	</div>
</div>
</body>
</html>