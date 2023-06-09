<html>
    <head>
    <center>
    <h1>Identitasku</h1>
    </center>
    </head>

    <body>
        <center>
        <h3>TABEL REGISTER PENDUDUK</h3>
        <button><a href="tambahadmin.php">Add New User</a><br/><br/></button>
        </center>

        <center>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        <?php
            include "sql.php";
            $query_mysql = mysqli_query($host,"SELECT * FROM  admin");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_admin']; ?></td>
                <td><?php echo $data['username_admin']; ?></td>
                <td><?php echo $data['password_admin']; ?></td>
                <td><a href='ubahadmin.php?id=<?php echo $data['id_admin'];?>'>Edit</a>
                    <a href='hapusadmin.php?id=<?php echo $data['id_admin'];?>'>Hapus</a>
                </td>
            </tr>
            <?php } ?>

        <table>
        </center>
            </body>
</html>