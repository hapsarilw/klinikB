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
            <a  href="../dokter/daftarpenanganan.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Penanganan</a>
            <a href="../viewData/dataJadwalPraktek.php?id_karyawan=<?php echo $_SESSION['idK']?>">Atur Jadwal</a>
            <a class="active" href="../dokter/daftarcatatanpasien.php?id_karyawan=<?php echo $_SESSION['idK']?>">Daftar Catatan Pasien</a>
        </div>
        <div class="content" >

            <h1>Catatan Pasien</h1>
            <a href="adddaftarcatatan.php">Tambah Data</a><br><br>
            <table border="1" width="100%">
                <tr>
                    <th>ID Konsultasi</th>
                    <th>ID Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Status Penanganan</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
    // Load file koneksi.php
    include "../../dbConnect.php";
               $idK = $_SESSION['idK'];
               $query = "select * from viewcatatanpasien where id_karyawan='".$idK."'";
               $sql = mysqli_query($conn, $query);

               while($data = mysqli_fetch_array($sql)) {
                   echo "<tr>";
                   echo "<td>".$data['id_konsultasi']."</td>";
                   echo "<td>".$data['id_pasien']."</td>";
                   echo "<td>".$data['nama_pasien']."</td>";
                   $getstatus = $data['id_status'];
                   $query2 = "select namaStatus from namastatus where idStatus = '".$getstatus."'";
                    $sql2 = mysqli_query($conn, $query2);
                   $data2 = mysqli_fetch_array($sql2);
                   echo "<td>".$getstatus."</td>";
                   echo "<td><a href=''>Ubah</td>";
                   echo "<td><a href=''>Hapus</td>";
                   echo "</tr>";
               } 
                ?>

            </table>
        </div>

    </body>
</html>