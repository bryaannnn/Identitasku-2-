<?php
session_start();

include('sql.php');

$id_penduduk = $_SESSION['id_penduduk'];

$file = $_FILES['aktakelahiran'];
$filename = $file['name'];
$tmp_name = $file['tmp_name'];
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);
$allowed_extensions = array('jpg', 'png', 'jpeg');

if (!in_array($file_extension, $allowed_extensions)) {
    echo 'Format File Tidak Diizinkan';
} else {
    $akta = 'userfile' . time() . '.' . $file_extension;
    $destination = 'aktakelahiran/' . $akta;
    move_uploaded_file($tmp_name, $destination);

}

$file = $_FILES['fotokk'];
$filename = $file['name'];
$tmp_name = $file['tmp_name'];
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);
$allowed_extensions = array('jpg', 'png', 'jpeg');

if (!in_array($file_extension, $allowed_extensions)) {
    echo 'Format File Tidak Diizinkan';
} else {
    $kk = 'userfile' . time() . '.' . $file_extension;
    $destination = 'fotokk/' . $kk;
    move_uploaded_file($tmp_name, $destination);

}

$file = $_FILES['fotouser'];
$filename = $file['name'];
$tmp_name = $file['tmp_name'];
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);
$allowed_extensions = array('jpg', 'png', 'jpeg');

if (!in_array($file_extension, $allowed_extensions)) {
    echo 'Format File Tidak Diizinkan';
} else {
    $foto_user = 'userfile' . time() . '.' . $file_extension;
    $destination = 'fotouser/' . $foto_user;
    move_uploaded_file($tmp_name, $destination);

}

$file = $_FILES['sidikjari'];
$filename = $file['name'];
$tmp_name = $file['tmp_name'];
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);
$allowed_extensions = array('jpg', 'png', 'jpeg');

if (!in_array($file_extension, $allowed_extensions)) {
    echo 'Format File Tidak Diizinkan';
} else {
    $sidikjari = 'userfile' . time() . '.' . $file_extension;
    $destination = 'sidikjari/' . $sidikjari;
    move_uploaded_file($tmp_name, $destination);

}

$sql = "INSERT into buktisyarat values(NULL,'$id_penduduk','$akta','$kk','$foto_user','$sidikjari')";
$insert = mysqli_query($host, $sql);
if ($insert) {
    echo "
<script>
    alert('Insert data berhasil');
    window.location='form.php';
</script>";
} else {
    echo "$id_penduduk";
    die(mysqli_error($host));
    echo "
    <script>
        alert('Insert data berhasil');
        window.location='view_buktisyarat.php';
    </script>";
}
?>