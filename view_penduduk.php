<html>
    <head>
    <center>
    <h1>Identitasku</h1>
    </center>
    </head>

    <body>
        <center>
        <h3>TABEL REGISTER PENDUDUK</h3>
        <button><a href="tambahdata.php">Add New User</a><br/><br/></button>
        </center>

        <center>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nomor KK</th>
                <th>Email</th>
                <th>Username</th>
                <th>Nomor Telpon</th>
                <th>Password</th>
            </tr>
        <?php
            include "sql.php";
            $query_mysql = mysqli_query($host,"SELECT * FROM  penduduk");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_penduduk']; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['no_kk']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['username_penduduk']; ?></td>
                <td><?php echo $data['no_telp_penduduk']; ?></td>
                <td><?php echo $data['password_penduduk']; ?></td>
                <td><a href='ubahdata.php?id=<?php echo $data['id_penduduk'];?>'>Edit</a>
                    <a href='hapusdata.php?id=<?php echo $data['id_penduduk'];?>'>Hapus</a>
                    <form
                </td>
            </tr>
            <?php } ?>

        <table>
        </center>
            </body>
</html>