<html>
<?php
session_start();
?>

<head>
  <title>Data Warga Negara RI</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#fff">
  <form action="" name="form1" enctype="multipart/form-data" method="post">
    <table width="638" height="960" border="1" align="center">
      <tr>
        <td height="94" valign="top" bgcolor="##5A5A5A">
          <font color="#FFFFFF"><br>
          </font>
          <blockquote>
            <p>
              <center>
                <font color="#FFFFFF" size="+2">DATA WARGA NEGARA REPUBLIK INDONESIA</font>
              </center>
            </p>
          </blockquote>
        </td>
      </tr>
      <tr>
        <td width="669" valign="top" bgcolor="#FFFFFF">
          <blockquote>
            <p>
              <font color="red">* Menginputkan data menggunakan huruf capital</font>
            </p>
            <br>
            <p> Nik &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp;: <input type="text" name="nik"></p>
            <p> Nama Lengkap &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <input type="text" name="nama" size=40></p>
            <p>Tempat : <input type="text" name="tl" placeholder=" Tempat">
            <p>Tanggal Lahir : <input type="date" name="tgl" placeholder=" Tanggal Lahir">
            <p>Jenis Kelamin &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
              <input type="radio" name="sex" placeholder="jenis_kelamin" value="LAKI-LAKI">LAKI-LAKI
              <input type="radio" name="sex" value="PEREMPUAN">PEREMPUAN
            </p>
            <p>Golongan Darah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
              <select name="darah">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
            </p>
            <p> Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
              <input type="text" name="alamat" size=60>
            </p>
            <p>RT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp;:
              <select name="rt">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
              </select>
            </p>
            <p>RW &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
              <select name="rw">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
              </select>
            </p>
            <p> Kel/Desa &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
              <input type="text" name="desa">
            </p>
            <p> Kecamatan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
              <input type="text" name="kecamatan">
            </p>
            <p> Agama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
              <select name="agama">
                <option value="ISLAM">ISLAM</option>
                <option value="KRISTEN">KRISTEN</option>
                <option value="KATOLIK">KATOLIK</option>
                <option value="BUDHA">BUDHA</option>
                <option value="HINDU">HINDU</option>
              </select>
            </p>
            <p> Status &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
              <input type="checkbox" name="status" value="BELUM KAWIN">
              BELUM KAWIN
              <input type="checkbox" name="status" value="MENIKAH">
              MENIKAH
            </p>
            <p> Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
              <input type="text" name="pekerjaan">
            </p>
            <p> Kewarganegaraan &nbsp; &nbsp; &nbsp;: <select name="warganegara">
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
              </select>
            <p>
              File Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <input name="userfile" type="file" />
            </p>
            </p>
          </blockquote>
          <br>
          <p>
            <center><input type="submit" name="cetak" value="CETAK">
              <input type="reset" value="BATAL">
            </center>
          </p>
        </td>
      </tr>
    </table>
  </form>
  <?php
  include('sql.php');
  if (isset($_POST['cetak'])) {
    $penduduk = $_SESSION['id_penduduk'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tl'];
    $tanggal_lahir = $_POST['tgl'];
    $jenis_kelamin = $_POST['sex'];
    $golongan_darah = $_POST['darah'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kel_desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];
    $kewarganegaraan = $_POST['warganegara'];
    $sql = "INSERT INTO ktp (id_penduduk,nik, nama_ktp, tempat, tanggal_lahir, jenis_kelamin, golongan_darah, alamat, rt, rw, kel_desa, kecamatan, agama, status_ktp, pekerjaan, kewarganegaraan) 
            VALUES ('$penduduk','$nik', '$nama', '$tempat', '$tanggal_lahir', '$jenis_kelamin', '$golongan_darah', '$alamat', '$rt', '$rw', '$kel_desa', '$kecamatan', '$agama', '$status', '$pekerjaan', '$kewarganegaraan')";

    $file = $_FILES['userfile'];
    $filename = $file['name'];
    $tmp_name = $file['tmp_name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $allowed_extensions = array('jpg', 'png', 'jpeg');

    if (!in_array($file_extension, $allowed_extensions)) {
      echo 'Format File Tidak Diizinkan';
    } else {
      $newname = 'userfile' . time() . '.' . $file_extension;
      $destination = 'gambar_ktp/' . $newname;
    }

    if (move_uploaded_file($tmp_name, $destination)) {
      echo $nik;
      echo '<br>';
      echo $nama;
      echo '<br>';
      echo $tempat;
      echo '<br>';
      echo $tanggal_lahir;
      echo '<br>';
      echo $jenis_kelamin;
      echo '<br>';
      echo $golongan_darah;
      echo '<br>';
      echo $alamat;
      echo '<br>';
      echo $rt;
      echo '<br>';
      echo $rw;
      echo '<br>';
      echo $kel_desa;
      echo '<br>';
      echo $kecamatan;
      echo '<br>';
      echo $agama;
      echo '<br>';
      echo $status;
      echo '<br>';
      echo $pekerjaan;
      echo '<br>';
      echo $kewarganegaraan;
      echo '<br>';
      echo $newname;

      $insert = mysqli_query($host, "INSERT INTO ktp  (id_ktp,id_penduduk,nik, nama_ktp, tempat, tanggal_lahir, jenis_kelamin, golongan_darah, alamat, rt, rw, kel_desa, kecamatan, agama, status_ktp, pekerjaan, kewarganegaraan, gambar_ktp) VALUES (null, $penduduk,
        '" . $nik . "',                
        '" . $nama . "',
        '" . $tempat . "',
        '" . $tanggal_lahir . "',
        '" . $jenis_kelamin . "',
        '" . $golongan_darah . "',
        '" . $alamat . "',
        '" . $rt . "',
        '" . $rw . "',
        '" . $kel_desa . "',
        '" . $kecamatan . "',
        '" . $agama . "',
        '" . $status . "',
        '" . $pekerjaan . "',
        '" . $kewarganegaraan . "',
        '" . $newname . "')");


      if ($insert) {
        echo '<script>alert("Berhasil")</script>';
        echo '<script>window.location="viewktp.php"</script>';
      } else {
        echo '<script>alert("Gagal Ditambahkan:' . mysqli_error($host) . '")</script>';
      }
    }
  }

  ?>


</body>

</html>