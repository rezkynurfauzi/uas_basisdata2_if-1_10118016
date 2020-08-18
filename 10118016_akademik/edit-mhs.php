<?php
    include ("koneksi/koneksi.php");
    if(isset($_POST['update']))
    {   
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $tgl_lahir = date('Y-m-d',strtotime($_POST['tgl_lahir']));
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        
        $result = mysqli_query($db, "UPDATE tb_mahasiswa SET nama_mhs='$nama_mhs',tgl_lahir='$tgl_lahir',jk='$jk',alamat='$alamat' WHERE nim = $nim");
    header("Location: data-mahasiswa.php");
}
?>
<?php

$nim = $_GET['nim'];

$result = mysqli_query($db, "SELECT * FROM tb_mahasiswa WHERE nim = $nim");

while($user_data = mysqli_fetch_array($result))
{
        $nama_mhs = $user_data['nama_mhs'];
        $tgl_lahir = $user_data['tgl_lahir'];
        $jk = $user_data['jk'];
        $alamat = $user_data['alamat'];
}
?>
<html>
<head>  
    <title>EDIT MAHASISWA - PRAKTEK BASIS DATA 2</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<center>
    <form name="update_user" method="post" action="edit-mhs.php">
        <table border="0">
            <tr> 
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama_mhs" value=<?php echo $nama_mhs;?>></td>
            </tr>
            <tr>
            <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir;?>></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki - Laki"> 
        <label> Laki - laki</label><br>
                <input type="radio" name="jk" value="Perempuan">
        <label>Perempuan</label><br></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>
                ></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
        <form action="data-mahasiswa.php" method="POST">
            <button class="tombol">Kembali</button>
        </form>
</center>
</html>