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
            <a href="daftarpenanganan.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Penanganan</a>
            <a href="../viewData/dataJadwalPraktek.php?id_karyawan=<?php echo $_SESSION['idK']?>">Atur Jadwal</a>
            <a class="active" href="daftarcatatanpasien.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Catatan Pasien</a>
        </div>
        <div class="content" >
            <h1>Tambah Catatan Pasien</h1>
            <form method="post" action="../../formhandling/fhaddkonsultasi.php?id_pasien=<?php echo $idP;?>&id_karyawan=<?php echo $idK;?>" enctype="multipart/form-data">
                <table cellpadding="8">
                    <tr>
                        <td>ID Pertemuan</td>
                        <td><input type="text" name="id_pertemuan" value=""></td>
                    </tr>
                    <tr>
                        <td>Nama Pasien</td>
                        <td><input type="text" name="nama_pasien" value=""></td>
                    </tr>
                    <tr>
                        <td>Nama Dokter</td>
                        <td><input type="text" name="nama_karyawan" value=""></td>
                    </tr>
                    <tr>
                        <td>Hari Pertemuan</td>
                        <td><input type="text" name="hari" value=""></td>
                    </tr>
                    <tr>
                        <td>Jam Pertemuan</td>
                        <td><input type="text" name="jam" value=""></td>
                    </tr>
                    <tr>
                        <td>Isi Catatan</td>
                        <td><textarea name="isi_catatan" value="" style="height:150px; width:300px"></textarea></td>
                    </tr>

                </table>

                <hr>
                <input type="submit" value="Tangani">
                <a href="daftarpenanganan.php"><input type="button" value="Batal"></a>
            </form>
        </div>
    </body>
</html>