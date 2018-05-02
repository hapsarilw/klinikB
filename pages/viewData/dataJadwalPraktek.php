<html>
<head>
    <title>Jadwal Praktek Dokter</title>
    <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
    <script type="text/javascript" src="../../styles/doktor.js"></script>
    <?php
    include('../pimpinan/tempPimpinan.php');
        // Load file koneksi.php
        include "../../dbConnect.php";

        $idK = $_SESSION['idK'];

        $query1 = "SELECT * FROM karyawan WHERE id_karyawan='".$idK."'";
        $sql1 = mysqli_query($conn, $query1);
        $data1 = mysqli_fetch_array($sql1);

        $query2 = "SELECT * FROM jadwal_praktek WHERE id_karyawan='".$idK."'";
        $sql2 = mysqli_query($conn, $query2);
        $data2 = mysqli_fetch_array($sql2);

        $query3 = "SELECT jenis_spesialisasi FROM viewspesialisasidokter WHERE id_karyawan='".$idK."'";
        $sql3 = mysqli_query($conn, $query3);
        $data3 = mysqli_fetch_array($sql3);
    ?>
</head>
<body>
<div class="topnav">
    <a class="active" href="../dokter/daftarpenanganan.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Penanganan</a>
    <a href="../viewData/dataJadwalPraktek.php?id_karyawan=<?php echo $_SESSION['idK']?>">Atur Jadwal</a>
    <a href="../dokter/daftarcatatanpasien.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Catatan Pasien</a>
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
            <td><?php echo " : " .$data3['jenis_spesialisasi'];?></td>
        </tr>
    </table>
    <a href="../dokter/addJP.php?id_karyawan=<?php echo $idK; ?>">Tambah Jadwal</a><br><br>
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

        $query = "SELECT * FROM praktekdokter where id_karyawan = ".$idK." ";
        $sql = mysqli_query($conn, $query);

        while($data = mysqli_fetch_array($sql)){
            echo "<tr>";
            $idJP = $data['id_jadwalPraktek'];
            echo "<td>".$data['hari']."</td>";
            echo "<td>".$data['jam_mulai']."</td>";
            echo "<td>".$data['jam_selesai']."</td>";

            echo "<td><a href='../dokter/ubahJp.php?id_jadwalPraktek=$idJP&id_karyawan=$idK'>Ubah</a></td>";
            echo "<td><a href='../dokter/hapusJp.php?id_jadwalPraktek=$idJP&id_karyawan=$idK'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>