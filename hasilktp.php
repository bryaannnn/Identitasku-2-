<html>

<head>
    <title>Hasil Kirim Data</title>
    <style type="text/css">
        p {
            color: #000099;
            font-family: verdana;
        }

        body {
            background-color: #333333;
        }

        table {
            margin: 0 auto;
            width: 50%;
            border-collapse: collapse;
            background: #ecf3eb;
        }

        th,
        td {
            border: 1px solid #999;
        }

        th {
            padding: 8px 0;
            background: #0cf;
            font-size: 30px;
        }

        td {
            padding: 4px 4px:
        }
    </style>
</head>

<body>
    <table align="center">
        <tr>
            <th height="50" colspan="2">KARTU TANDA PENDUDUK <br> REPUBLIK INDONESIA</th>
        </tr>
        <tr>
            <td>
                <p>
                <blockquote>
                    <pre>
<?php
include("sql.php");
// Execute the query
$query = "SELECT * FROM ktp";
$result = mysqli_query($host, $query);

// Fetch and display the data
while ($data = mysqli_fetch_assoc($result)) {
    echo 'Nik              : ' . $data['nik'] . '<br>';
    echo 'Nama             : ' . $data['nama_ktp'] . '<br>';
    echo 'Tempat/Tanggal Lahir : ' . $data['tempat'] . '/' . $data['tanggal_lahir'] . '<br>';
    echo 'Jenis Kelamin    : ' . $data['jenis_kelamin'] . '<br>';
    echo 'Golongan Darah   : ' . $data['golongan_darah'] . '<br>';
    echo 'Alamat           : ' . $data['alamat'] . '<br>';
    echo 'RT/RW            : ' . $data['rt'] . '/' . $data['rw'] . '<br>';
    echo 'Kel/Desa         : ' . $data['kel_desa'] . '<br>';
    echo 'Kecamatan        : ' . $data['kecamatan'] . '<br>';
    echo 'Agama            : ' . $data['agama'] . '<br>';
    echo 'Status Perkawinan: ' . $data['status_ktp'] . '<br>';
    echo 'Pekerjaan        : ' . $data['pekerjaan'] . '<br>';
    echo 'Kewarganegaraan  : ' . $data['kewarganegaraan'] . '<br>';
    $berlaku_hingga = date('d-m-Y', strtotime($data['tanggal_lahir'] . '+5 years'));
    echo 'Berlaku Hingga   : ' . $berlaku_hingga . '<br>';

    ?>
                                    </pre>
                    </blockquote>
                    </p>
                </td>
                <td>
                    <blockquote>
                        <?php

                        echo "<img src='gambar_ktp/" . $data['gambar_ktp'] . "' height='300' width='200'>";
}
?>

                </blockquote>
            </td>
        </tr>
    </table><br>
    <table align="center">
        <tr>
            <td colspan="2">
                <center>
                    <a href="viewktp.php" title="KLIK" style="color:white;">
                        <h3>Back To Home</h3>
                    </a>
                </center>
            </td>
        </tr>
    </table>
</body>

</html>