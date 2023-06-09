<?php
include('sql.php');

if (isset($_GET['id'])) {
    $delete = mysqli_query($host, "DELETE FROM buktisyarat WHERE id_buktisyarat = '" . $_GET['id'] . "'");
    echo '<script>window.location="view_buktisyarat.php"</script>';
}