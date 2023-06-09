<html> 
    <head>

    </head>

<form action="" method="post">
        <input type="text" placeholder="NIK" name="nik">
        <br>
        <input type="text" placeholder="Nomor KK" name="no_kk">
        <br>
        <input type="text" placeholder="Email" name="eml">
        <br>
        <input type="text" placeholder="Username" name="usr">
        <br>
        <input type="text" placeholder="Nomor Telpon" name="nmr_tlp">
        <br>
        <input type="text" placeholder="Password" name="psswrd">
        <input type="submit" value="Daftar" name="tambah">  
</form>
<?php
    include('sql.php');
        if(isset($_POST['tambah'])){
            $nik = $_POST['nik'];
            $no_kk = $_POST['no_kk'];
            $eml = $_POST['eml'];
            $usr = $_POST['usr'];
            $nmr_tlp = $_POST['nmr_tlp'];
            $psswrd = $_POST['psswrd'];
            $sql = "INSERT INTO penduduk values
            ('', '$nik', '$no_kk', '$eml', '$usr', '$nmr_tlp', '$psswrd')";
            $result = mysqli_query($host,$sql);
            if($result){
                echo '<script>alert("Berhasil!")</script>';
                echo '<script>window.location="view_penduduk.php"</script>';
            }else{
                echo '<script>alert("Gagal Ditambahkan!")</script>';
            }

        } 
        
      
        
?>
</html>