<?php
include('sql.php');

if(isset($_GET['id'])){
    $delete = mysqli_query($host, "DELETE FROM admin WHERE id_admin = '".$_GET['id']."'");
    echo '<script>window.location="view_admin.php"</script>';
}