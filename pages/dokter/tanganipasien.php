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
            <a class="active" href="daftarpenanganan.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Penanganan</a>
            <a href="../viewData/dataJadwalPraktek.php?id_karyawan=<?php echo $_SESSION['idK']?>">Atur Jadwal</a>
            <a href="daftarcatatanpasien.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Catatan Pasien</a>
        </div>
        <div class="content" >
            <h1>Form Penanganan Pasien</h1>

            <?php
    // Load file koneksi.php
    include "../../dbConnect.php";
               $idK = $_SESSION['idK'];
               $idP = $_GET['id_pasien'];
               $namaK = $_GET['nama_karyawan'];
               $id_pertemuan = $_GET['id_pertemuan'];

               $query = "select * from viewnamapasien where id_karyawan='".$idK."' and statusPenanganan='N' and id_pasien='".$idP."'";
               $sql = mysqli_query($conn, $query);
               while($data = mysqli_fetch_array($sql)) {
                   $namaP = $data['nama_pasien'];
                   $hari = $data['hari'];
                   $jam = $data['jam_pertemuan'];
               }

            ?>
            <form method="post" action="../../formhandling/fhaddkonsultasi.php?id_pasien=<?php echo $idP;?>&id_karyawan=<?php echo $idK;?>" enctype="multipart/form-data">
                <table cellpadding="8">
                    <tr>
                        <td>ID Pertemuan</td>
                        <td><input type="text" name="id_pertemuan" value="<?php echo $id_pertemuan; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Pasien</td>
                        <td><input type="text" name="nama_pasien" value="<?php echo $namaP; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Dokter</td>
                        <td><input type="text" name="nama_karyawan" value="<?php echo $namaK; ?>"></td>
                    </tr>
                    <tr>
                        <td>Hari Pertemuan</td>
                        <td><input type="text" name="hari" value="<?php echo $hari; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jam Pertemuan</td>
                        <td><input type="text" name="jam" value="<?php echo $jam; ?>"></td>
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