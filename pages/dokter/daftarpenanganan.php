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
            <h1>Daftar Penanganan</h1>
            <table border="1" width="100%">
                <tr>
                    <th>ID Pasien</th>
                    <th>Nama</th>
                    <!--
<th>Email</th>
<th>No. Telepon</th>
-->
                    <th>Hari Pertemuan</th>
                    <th>Jam Pertemuan</th>
                    <th>Status Penanganan</th>
                    <th>Aksi</th>
                </tr>
                <?php
    // Load file koneksi.php
    include "../../dbConnect.php";
               $idK = $_SESSION['idK'];
               
               $query0 = "select nama_karyawan from karyawan where id_karyawan = '".$idK."'";
               $sql0 = mysqli_query($conn, $query0);
               $data0 = mysqli_fetch_array($sql0);
               $namaK = $data0[0];

               $query = "select * from viewnamapasien where id_karyawan='.$idK.' and statusPenanganan='N'";
               $sql = mysqli_query($conn, $query);
               while($data = mysqli_fetch_array($sql)){
                   echo "<tr>";
                   echo "<td>".$data['id_pasien']."</td>";
                   echo "<td>".$data['nama_pasien']."</td>";
                   echo "<td>".$data['hari']."</td>";
                   echo "<td>".$data['jam_pertemuan']."</td>";
                   $getStatus = $data['statusPenanganan'];
                   if($getStatus == 'N') {
                       $statusBelum = 'Belum ditangani';
                       echo "<td>".$statusBelum."</td>";
                   }
                   $id_pertemuan = $data['id_pertemuan'];
                   echo "<td><a href='tanganipasien.php?id_pasien=".$data['id_pasien']."&nama_karyawan=".$namaK."&id_pertemuan=".$id_pertemuan."'>Tangani</a></td>";
                   echo "</tr>";
               }
                ?>
            </table>
        </div>

    </body>
</html>