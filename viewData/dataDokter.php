<html>
<head>
    <title>Daftar Dokter</title>
    <link rel="stylesheet" type="text/css" href="../doktor.css">
    <script type="text/javascript" src="../doktor.js"></script>
    <?php
    include('../tempPimpinan.php');?>
</head>
<body>
<div class="topnav">
    <a href="dataStatistik.php">Statistik Klinik</a>
    <a class="active" href="viewData/dataDokter.php">Dokter</a>
    <a href="viewData/dataPasien.php">Pasien</a>
    <a href="daftarCatatan.php">Cari Data</a>
</div>
<div class="content" >
    <h1>Data Dokter</h1>
    <a href="../Form/addDokter.php">Tambah Data</a><br><br>
    <table border="1" width="100%">
        <tr>
            <th>Foto</th>
            <th>ID Karyawan</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Spesialisasi</th>
            <th>Jabatan</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        // Load file koneksi.php
        include "../dbConnect.php";

        $query = "SELECT * FROM karyawan"; // Query untuk menampilkan semua data siswa
        $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query

        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td><img src='/imgDokter".$data['foto']."' width='100' height='100'></td>";
            echo "<td>".$data['id_karyawan']."</td>";
            echo "<td>".$data['nama_karyawan']."</td>";
            echo "<td>".$data['email']."</td>";
            echo "<td>".$data['password']."</td>";
            echo "<td>".$data['nama_spesialisasi']."</td>";
            echo "<td>".$data['jabatan']."</td>";
            echo "<td><a href='../Form/ubahDokter.php?id_karyawan=".$data['id_karyawan']."'>Ubah</a></td>";
            echo "<td><a href='../Form/hapusDokter.php?id_karyawan=".$data['id_karyawan']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>