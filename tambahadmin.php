<html>

<head>

</head>

<form action="" method="post">
    <input type="text" placeholder="Username" name="username">
    <br>
    <input type="text" placeholder="Password" name="password">
    <input type="submit" value="Daftar" name="tambah">
</form>
<?php
include('sql.php');
if (isset($_POST['tambah'])) {
    $usr = $_POST['username'];
    $psswrd = $_POST['password'];
    $sql = "INSERT INTO admin values
            ('','$usr', '$psswrd')";
    $result = mysqli_query($host, $sql);
    if ($result) {
        echo '<script>alert("Berhasil!")</script>';
        echo '<script>window.location="view_admin.php"</script>';
    } else {
        echo '<script>alert("Gagal Ditambahkan!")</script>';
    }

}



?>

</html>