<html>
    <head>
        <title>Tambah Dokter</title>
        <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
        <script type="text/javascript" src="../../styles/doktor.js"></script>
        <?php
        include('tempPimpinan.php');
        ?>
    </head>
    <body>
        <div class="topnav">
            <a href="../viewData/dataStatistik.php">Statistik Klinik</a>
            <a class="active" href="../viewData/dataDokter.php">Dokter</a>
            <a href="../viewData/dataPasien.php">Pasien</a>
            <a href="../pimpinan/lihatdaftarcatatan.php">Daftar Catatan Pasien</a>
        </div>
        <div class="content">
            <h1>Tambah Data Dokter</h1>
            <form method="post" action="../../FormHandling/fhDokter.php" enctype="multipart/form-data">
                <table cellpadding="8">
                    <tr>
                        <td>Nama Karyawan</td>
                        <td><input type="text" name="nama_karyawan"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Nama Spesialisasi</td>
                        <td>
                            <?php
                            include '../../dbconnect.php';
                            $query = "select * from spesialisasi";
                            $sql = mysqli_query($conn, $query);
                            while($data = mysqli_fetch_array($sql)) {
                                $jenisSp = $data['jenis_spesialisasi'];
                                $id_spesialisasi = $data['id_spesialisasi'];
                                echo "<input type='radio' name='jenisSp' value='".$jenisSp."'>".$jenisSp."<br>";
                            }
                            ?>
                        </td>
                        <input type="text" name="id_spesialisasi" style="display:none" value="<?php echo $id_spesialisasi; ?>">
                    </tr>

<!--
                    <tr>
                        <td>Jabatan</td>
                        <td>
                            <input type="radio" name="jabatan" value="Dokter"> Dokter
                            <input type="radio" name="jabatan" value="Pimpinan"> Pimpinan
                        </td>
                    </tr>
-->
                </table>

                <hr>
                <input type="submit" value="Simpan">
                <a href="../viewData/dataDokter.php"><input type="button" value="Batal"></a>
            </form>
        </div>
    </body>
</html>