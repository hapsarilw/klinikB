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
            <a href="">Daftar Penanganan</a>
            <a href="">Atur Jadwal</a>
            <a class="active" href="">Daftar Catatan Pasien</a>
        </div>
        <div class="content" >
            <h1>Daftar Catatan Pasien</h1>
            <!-- tambah search boxuntuk nyari nama pasien-->
            <label>Cari nama pasien:</label>
            <form id="searchbox" action="fhsearchpasien" method="post">
                <input type="text" name="carinamaP" style="width:300px;"/>
                <button type="submit" name="search" class="searchbutton">
                    <img src="../../img/searchicon.png" style="width:30px; height: 30px;"/>
                </button>
            </form>
            <table border="1" width="100%">
                <tr>
                    <th>ID Pasien</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th colspan="2">Aksi</th>
                </tr>

                <!--
<?php
// Load file koneksi.php
include "../../dbConnect.php";

$query = "select * from hasil_konsultasi";
$sql = mysqli_query($conn, $query2);

while($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['id_pasien']."</td>";
    echo "<td>".$data['nama_pasien']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td>".$data['noTelp']."</td>";
    echo "<td><a href='../pimpinan/ubahPasien.php?id_pasien=".$data['id_pasien']."'>Ubah</a></td>";
    echo "<td><a href='../pimpinan/hapusPasien.php?id_pasien=".$data['id_pasien']."'>Hapus</a></td>";
    echo "</tr>";
}
?>
-->
            </table>
        </div>

    </body>
</html>