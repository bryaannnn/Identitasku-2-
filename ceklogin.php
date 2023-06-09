<?php

session_start();

include "sql.php";

@$nik = $_POST['nik'];
@$pass = $_POST['password_penduduk'];

$sql_login = "SELECT * FROM penduduk where nik = '$nik' and password_penduduk = '$pass'";
$login = mysqli_query($host, $sql_login);

$data = mysqli_fetch_array($login);

if ($data) {
    $_SESSION['id_penduduk'] = $data['id_penduduk'];
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['password_penduduk'] = $data['password_penduduk'];

    echo "<script>
            alert('Login Berhasil');
            document.location = 'tambahdata_buktisyarat.php';
        </script>";
} else {
    echo "<script>
            alert('Login Failed, check nik and password_penduduk');
            document.location = 'login.php';
        </script>";

}

?>