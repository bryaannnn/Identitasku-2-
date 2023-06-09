<?php
include('sql.php');

if(isset($_GET['id'])){
    $delete = mysqli_query($host, "DELETE FROM penduduk WHERE id_penduduk = '".$_GET['id']."'");
    echo '<script>window.location="view_penduduk.php"</script>';
}