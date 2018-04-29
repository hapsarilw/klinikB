<html>
<head>
    <title>Jadwal Praktek Dokter</title>
    <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
    <script type="text/javascript" src="../../styles/doktor.js"></script>
    <?php
    include('../pimpinan/tempPimpinan.php');
        // Load file koneksi.php
        include "../../dbConnect.php";

        // Ambil data NIS yang dikirim oleh index.php melalui URL
        $idK = $_GET['id_karyawan'];

        // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
        $query1 = "SELECT * FROM karyawan WHERE id_karyawan='".$idK."'";
        $sql1 = mysqli_query($conn, $query1);  // Eksekusi/Jalankan query dari variabel $query
        $data1 = mysqli_fetch_array($sql1); // Ambil data dari hasil eksekusi $sql
    ?>
</head>
<body>
<div class="topnav">
    <a href="dataStatistik.php">Statistik Klinik</a>
    <a class="active" href="dataDokter.php">Dokter</a>
    <a href="dataPasien.php">Pasien</a>
    <a href="daftarCatatan.php">Cari Data</a>
</div>
<div class="content" >
    <h1>Data Jadwal Praktek</h1>
    <table id="infoDokter">
        <tr>
            <td>Nama Karyawan</td>
            <td><?php echo" : " .$data1['nama_karyawan']; ?></td>
        </tr>
        <tr>
            <td>Spesialisasi</td>
            <td><?php echo " : " .$data1['nama_spesialisasi']?></td>
        </tr>
    </table>
    <a href="../pimpinan/addJP.php?id_karyawan=<?php echo $idK; ?>">Tambah Jadwal</a><br><br>
    <table border="1" width="100%">
        <tr>
            <th>Hari</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        // Load file koneksi.php
        include "../../dbConnect.php";

        $query = "SELECT * FROM praktekdokter where id_karyawan = ".$idK." "; // Query untuk menampilkan semua data siswa
        $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query

        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td>".$data['hari']."</td>";
            echo "<td>".$data['jam_mulai']."</td>";
            echo "<td>".$data['jam_selesai']."</td>";
            echo "<td><a href='../pimpinan/ubahJP.php?id_karyawan=".$data['id_karyawan']."'>Ubah</a></td>";
            echo "<td><a href='../pimpinan/hapusJP.php?id_karyawan=".$data['id_karyawan']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>