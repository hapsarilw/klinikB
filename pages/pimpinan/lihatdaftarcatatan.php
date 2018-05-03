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
            <a href="../viewData/dataStatistik.php">Statistik Klinik</a>
            <a href="../viewData/dataDokter.php">Dokter</a>
            <a href="../viewData/dataPasien.php">Pasien</a>
            <a class="active" href="lihatdaftarcatatan.php">Daftar Catatan Pasien</a>
        </div>
        <div class="content" >
            <h1>Catatan Pasien</h1>
            <table border="1" width="100%">
                <tr>
                    <th>ID Konsultasi</th>
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>Waktu Perubahan</th>
                    <th>Status</th>
                    <th>Lihat Catatan</th>
                </tr>
                <?php
                // Load file koneksi.php
                include "../../dbConnect.php";

                $query = "SELECT * FROM hasil_konsultasi"; //table view joinan hasil konsultasi, dokter, pasien
                $sql = mysqli_query($conn, $query);

                while($data = mysqli_fetch_array($sql)){ 
                    echo "<tr>";
                    echo "<td>".$data['id_konsultasi']."</td>";
                    echo "<td>".$data['']."</td>";
                    echo "<td>".$data['']."</td>";
                    echo "<td>".$data['']."</td>";
                    echo "<td>".$data['']."</td>";
                    echo "<td><a href=''".$data[''].">Lihat Catatan</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

    </body>
</html>