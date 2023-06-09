<html>

<head>
    <center>
        <h1>Identitasku</h1>
    </center>
</head>

<body>
    <center>
        <h3>TABEL BUKTI SYARAT</h3>
        <button><a href="tambahdata_buktisyarat.php">Add New User</a><br /><br /></button>
    </center>

    <center>
        <table border="1" class="table">
            <tr>
                <th>Foto KK</th>
                <th>Foto Penduduk</th>
                <th>Sidik jari</th>
                <th>Akta Kelahirna</th>
            </tr>
            <?php
            include "sql.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM buktisyarat");
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr>
                    <td><img src="./fotokk/<?php echo $data['foto_kk']; ?>" width="100"></td>
                    <td><img src="./fotouser/<?php echo $data['foto_penduduk']; ?>" width="100"></td>
                    <td><img src="./sidikjari/<?php echo $data['sidik_jari']; ?>" width="100"></td>
                    <td><img src="./aktakelahiran/<?php echo $data['akta_kelahiran']; ?>" width="100"></td>
                    <td><a href='ubah_buktisyarat.php?id=<?php echo $data['id_buktisyarat']; ?>'>Edit</a>
                        <a href='hapusbuktisyarat.php?id=<?php echo $data['id_buktisyarat']; ?>'>Hapus</a>
                    </td>
                </tr>
            <?php } ?>

            <table>
    </center>
</body>

</html>