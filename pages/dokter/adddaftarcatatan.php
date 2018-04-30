<html>
    <head>
        <title>Daftar Dokter</title>
        <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
        <script type="text/javascript" src="../../styles/doktor.js"></script>
        <?php
        include('../pimpinan/tempPimpinan.php');?>
    </head>
    <body>
        <div class="topnav">
            <a href="daftarpenanganan.php">Daftar Penanganan</a>
            <a href="aturJadwalPraktek.php">Atur Jadwal</a>
            <a class="active" href="daftarcatatanpasien.php">Daftar Catatan Pasien</a>
        </div>
        <div class="content" >
            <h1>Tambah Catatan Pasien</h1>
                        <form method="post" action="../../FormHandling/fhDokter.php" enctype="multipart/form-data">
                <table cellpadding="8">
                    <tr>
                        <td>Nama Pasien</td>
                        <td><input type="text" name="nama_pasien"></td>
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
                            <input type="radio" name="nama_spesialisasi" value="Gigi dan Mulut"> Gigi dan Mulut
                            <input type="radio" name="nama_spesialisasi" value="Kandungan"> Kandungan
                            <input type="radio" name="nama_spesialisasi" value="Penyakit Dalam"> Penyakit Dalam
                            <input type="radio" name="nama_spesialisasi" value="Tulang"> Tulang
                            <input type="radio" name="nama_spesialisasi" value="Umum"> Umum
                        </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td><input type="file" name="foto"></td>
                    </tr>
                </table>

                <hr>
                <input type="submit" value="Simpan">
                <a href="../viewData/dataDokter.php"><input type="button" value="Batal"></a>
            </form>
        </div>
    </body>
</html>