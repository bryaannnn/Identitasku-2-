<?php
include('sql.php');
$conn = mysqli_connect("localhost", "root", "", "identitasku");

$kategori = mysqli_query($conn, "SELECT * FROM admin WHERE id_admin");
$k = mysqli_fetch_object($kategori);
?>

<html>
<head>
    <title>Edit Admin</title>
</head>

<body>
    <form action="" method="post"> 
        <p>Username  :
        <input type="text" placeholder="Username" name="username" value="<?php echo $k->username_admin ?>">
        </p><br>
        <p>Password  :
        <input type="text" placeholder="Password" name="password" value="<?php echo $k->password_admin ?>">
        </p>
        <br>
        <input type="submit" value="Ubah" name="tambah">
    </form>

<?php
if(isset($_POST['tambah'])){
    $usr = $_POST['username'];
    $psswrd = $_POST['password'];
    $update = mysqli_query($host, "UPDATE admin SET 
                                username_admin = '".$usr."',
                                password_admin = '".$psswrd."'
                                WHERE id_admin = '".$_GET['id']."'");
    if($update){
        echo '<script>alert("Berhasil!")</script>';
        echo '<script>window.location="view_admin.php"</script>';
    }else{
        echo '<script>alert("Gagal Ditambahkan!")</script>';
    }
}
?>

</body>
</html>
