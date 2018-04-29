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
            <a href="../viewData/dataDokter.php">Dokter</a>
            <a class="active" href="../viewData/dataPasien.php">Pasien</a>
            <a href="../dokter/daftarCatatan.php">Cari Data</a>
        </div>
        <div class="content">
            <h1>Tambah Data Pasien</h1>
            <?php
                include '../pasien/pendaftaranpasien.php';
            ?>
<!--
            <form action="../../formhandling/fhdaftarpasien.php" method="post">
                Nama Lengkap: <br>
                <input type="text" name="namaP" value="" required><br>

                E-mail: <br>
                <input type="text" name="emailP" value="" required><br>

                No. telepon: <br>
                <input type="text" name="telpP" value="" required><br>

                Jenis Spesialisasi Dokter: <br>
                <select id="jenisSP" name="jenisSP" required>
                    <option value="none">None</option>
                    <option value="penyakitdalam">Penyakit Dalam</option>
                    <option value="umum">Umum</option>
                    <option value="kandungan">Kandungan</option>
                    <option value="anak">Anak</option>
                </select>
                <br>

                Nama Dokter: <br>
                <select id="namaD" name="namaD" required>
                    <option value="none">None</option>
                    <option value="">&nbsp;</option>
                </select>
                <br>

                Tanggal Pertemuan: <br>
                <input id="hari_pertemuan" type="date" name="tglPertemuan" required> <br>

                Jam Pertemuan: <br>
                <select id="jam_pertemuan" name="jamPertemuan" required>
                    <option value="none">None</option>
                    <option value="">&nbsp;</option>
                </select>
                <br>

                <input type="submit" class="button" style="width:75px;" value="Lanjut">
            </form>
-->
        </div>
    </body>
</html>