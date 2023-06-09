<html>

<head>
    <center>
        <h1>Identitasku</h1>
    </center>
</head>

<body>
    <center>
        <table border="1" class="table">
            <tr>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Tempat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Golongan Darah</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>RW</th>
                <th>Kel/Desa</th>
                <th>Kecamatan</th>
                <th>Agama</th>
                <th>Status</th>
                <th>Pekerjaan</th>
                <th>Kewarganegaraan</th>
                <th>Foto KTP</th>
            </tr>
            <?php
            include "sql.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM ktp");
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <tr>
                    <td>
                        <?php echo $data['nik']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_ktp']; ?>
                    </td>
                    <td>
                        <?php echo $data['tempat']; ?>
                    </td>
                    <td>
                        <?php echo $data['tanggal_lahir']; ?>
                    </td>
                    <td>
                        <?php echo $data['jenis_kelamin']; ?>
                    </td>
                    <td>
                        <?php echo $data['golongan_darah']; ?>
                    </td>
                    <td>
                        <?php echo $data['alamat']; ?>
                    </td>
                    <td>
                        <?php echo $data['rt']; ?>
                    </td>
                    <td>
                        <?php echo $data['rw']; ?>
                    </td>
                    <td>
                        <?php echo $data['kel_desa']; ?>
                    </td>
                    <td>
                        <?php echo $data['kecamatan']; ?>
                    </td>
                    <td>
                        <?php echo $data['agama']; ?>
                    </td>
                    <td>
                        <?php echo $data['status_ktp']; ?>
                    </td>
                    <td>
                        <?php echo $data['pekerjaan']; ?>
                    </td>
                    <td>
                        <?php echo $data['kewarganegaraan']; ?>
                    </td>
                    <td><img src="./gambar_ktp/<?php echo $data['gambar_ktp']; ?>" width="100"></td>';
                    <td><a href='ubahktp.php?id=<?php echo $data['id_ktp']; ?>'>Edit</a>
                        <a href='hapusktp.php?id=<?php echo $data['id_ktp']; ?>'>Hapus</a>
                        <form action="hasilktp.php" name="form1" enctype="multipart/form-data" method="post">
                            <p><input type="submit" name="cetak" value="CETAK">
                        </form>
                    </td>
                    \
                    
                </tr>
            <?php } ?>

            <table>
    </center>
</body>

</html>