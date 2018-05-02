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
            <a href="../pimpinan/lihatdaftarcatatan.php">Daftar Catatan Pasien</a>
        </div>
        <div class="content">
            <h1>Tambah Data Pasien</h1>
            <?php
                include '../pasien/pendaftaranpasien.php';
            ?>
        </div>
    </body>
</html>