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
            <a href="dataStatistik.php">Statistik Klinik</a>
            <a href="dataDokter.php">Dokter</a>
            <a class="active" href="dataPasien.php">Pasien</a>
            <a href="daftarCatatan.php">Cari Data</a>
        </div>
        <div class="content" >
            <h1>Data Pasien</h1>
            <a href="../pimpinan/addPasien.php">Tambah Pasien</a><br><br>
            <table border="1" width="100%">
                <tr>
                    <th>ID Pasien</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Lihat Catatan</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                // Load file koneksi.php
                include "../../dbConnect.php";

                $query = "SELECT * FROM pasien"; // Query untuk menampilkan semua data siswa
                $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
                
                $query2 = "select * from hasil_konsultasi";
                $sql2 = mysqli_query($conn, $query2);

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td>".$data['id_pasien']."</td>";
                    echo "<td>".$data['nama_pasien']."</td>";
                    echo "<td>".$data['email']."</td>";
                    echo "<td>".$data['noTelp']."</td>";
                    echo "<td><a href='../pimpinan/ubahPasien.php?id_konsultasi=".$data2['id_konsultasi']."'>Lihat</a></td>";
                    echo "<td><a href='../pimpinan/ubahPasien.php?id_pasien=".$data['id_pasien']."'>Ubah</a></td>";
                    echo "<td><a href='../pimpinan/hapusPasien.php?id_pasien=".$data['id_pasien']."'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

    </body>
</html>