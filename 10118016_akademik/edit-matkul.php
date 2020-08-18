<?php
    include ("koneksi/koneksi.php");
    if(isset($_POST['update']))
{   
        $Kode_MK = $_POST['Kode_MK'];
        $namamk = $_POST['Nama_MK'];
        $SKS = $_POST['SKS'];
        $result = mysqli_query($db, "UPDATE tb_matkul SET Nama_MK='$namamk',SKS='$SKS' WHERE Kode_MK = $Kode_MK");
    header("Location: data-matkul.php");
}
?>
<?php
    $Kode_MK = $_GET['Kode_MK'];
    $result = mysqli_query($db, "SELECT * FROM tb_matkul WHERE Kode_MK = $Kode_MK");
while($user_data = mysqli_fetch_array($result))
{
    $namamk = $user_data['Nama_MK'];
    $SKS = $user_data['SKS'];
}
?>

<html>
<head>  
    <title>Edit User Data</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
</head>
    <form name="update_user" method="post" action="edit-matkul.php">
        <table border="0">
            <tr> 
                <td>Nama Matakuliah</td>
                <td><input type="text" name="Nama_MK" value=<?php echo $namamk;?>></td>
            </tr>
            <tr>
            <td>SKS</td>
                <td><input type="text" name="SKS" value=<?php echo $SKS;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="Kode_MK" value=<?php echo $_GET['Kode_MK'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</html>