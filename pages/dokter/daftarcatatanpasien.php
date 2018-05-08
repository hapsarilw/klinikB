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
            <table border="1" width="100%">
                <tr>
<!--                    <th>ID Konsultasi</th>-->
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>Waktu Perubahan</th>
                    <th>Status</th>
                </tr>
                <?php
                // Load file koneksi.php
                include "../../dbConnect.php";
               
                
               
                $query0 = "select nama_karyawan from karyawan where id_karyawan='".$_SESSION['idK']."'";
                $sql0 = mysqli_query($conn, $query0);
                $data0 = mysqli_fetch_array($sql0);

                $query = "SELECT * FROM viewpasienkonsultasi where nama_karyawan = '".$data0[0]."'"; //table view joinan hasil konsultasi, dokter, pasien
                $sql = mysqli_query($conn, $query);

                while($data = mysqli_fetch_array($sql)){ 
                    echo "<tr>";
//                    echo "<td>".$data['id_konsultasi']."</td>";
                    echo "<td>".$data['nama_pasien']."</td>";
                    echo "<td>".$data['nama_karyawan']."</td>";
                    echo "<td>".$data['waktu_perubahan']."</td>";
                    echo "<td>".$data['idStatus']."</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

    </body>
</html>