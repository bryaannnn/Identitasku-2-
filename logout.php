<?php

session_start();


unset($_SESSION['id_penduduk']);
unset($_SESSION['nik']);
unset($_SESSION['password_penduduk']);

session_destroy();

echo "<script>
alert('Logout Successfully');
document.location = 'view_php.php';
</script>";

?>