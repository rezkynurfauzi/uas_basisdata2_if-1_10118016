<?php
    include ("koneksi/koneksi.php");
    if(isset($_POST['update']))
    {   
        $nip = $_POST['nip'];
        $nama = $_POST['nama_dosen'];
        $result = mysqli_query($db, "UPDATE tb_dosen SET nama_dosen='$nama' WHERE nip = $nip");
    header("Location: data-dosen.php");
    }
?>

<?php
        $nip = $_GET['nip'];
        $result = mysqli_query($db, "SELECT * FROM tb_dosen WHERE nip = $nip");
    while($user_data = mysqli_fetch_array($result))
    {
        $nama = $user_data['nama_dosen'];
    }
?>

<html>
<head>  
    <title>EDIT DOSEN - PRAKTEK BASIS DATA 2</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<center>
    <form name="update_user" method="post" action="edit-dosen.php">
        <table border="0">
        <tr> 
            <tr> 
                <td>Nama Dosen</td>
                <td><input type="text" name="nama_dosen" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nip" value=<?php echo $_GET['nip'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
        <form action="data-dosen.php" method="POST">
            <button class="tombol">Kembali</button>
        </form>
</center>
</html>