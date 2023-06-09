<?php
include('sql.php');

if(isset($_GET['id'])){
    $delete = mysqli_query($host, "DELETE FROM ktp WHERE id_ktp = '".$_GET['id']."'");
    echo '<script>window.location="viewktp.php"</script>';
}