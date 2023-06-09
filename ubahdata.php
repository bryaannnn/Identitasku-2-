<?php
include('sql.php');
$conn = mysqli_connect("localhost", "root", "", "identitasku");

$kategori = mysqli_query($conn, "SELECT * FROM penduduk WHERE id_penduduk = '".$_GET['id']."'");
$k = mysqli_fetch_object($kategori);
?>

<html>
<head>
    <title>Edit Penduduk</title>
</head>

<form action="" method="post"> 
    <input type="text" placeholder="NIK" name="nik" value="<?php echo $k->nik ?>">
    <br>
    <input type="text" placeholder="Nomor KK" name="no_kk" value="<?php echo $k->no_kk ?>">
    <br>
    <input type="text" placeholder="Email" name="eml" value="<?php echo $k->email ?>">
    <br>
    <input type="text" placeholder="Username" name="usr" value="<?php echo $k->username_penduduk ?>">
    <br>
    <input type="text" placeholder="Nomor Telpon" name="nmr_tlp" value="<?php echo $k->no_telp_penduduk ?>">
    <br>
    <input type="text" placeholder="Password" name="psswrd" value="<?php echo $k->password_penduduk ?>">
    <a href="viewtabel.php"><input type="submit" value="Ubah" name="tambah"></a>

</form>

<?php
if(isset($_POST['tambah'])){
    $nik = $_POST['nik'];
    $nokk = $_POST['no_kk'];
    $eml = $_POST['eml'];
    $usn = $_POST['usr'];
    $notelp = $_POST['nmr_tlp'];
    $pass = $_POST['psswrd'];
    $update = mysqli_query($conn, "UPDATE penduduk SET 
                                nik = '".$nik."',
                                no_kk = '".$nokk."',
                                email = '".$eml."',
                                username_penduduk = '".$usn."',
                                no_telp_penduduk = '".$notelp."',
                                password_penduduk = '".$pass."'
                                WHERE id_penduduk = '".$_GET['id']."'");
                                if($update){
                                    echo '<script>alert("Berhasil!")</script>';
                                    echo '<script>window.location="view_penduduk.php"</script>';
                                }else{
                                    echo '<script>alert("Gagal Ditambahkan!")</script>';
                                }
}
?>