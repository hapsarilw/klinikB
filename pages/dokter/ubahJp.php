<html>
<head>
    <title>Ubah Jadwal Praktek</title>
    <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
    <script type="text/javascript" src="../../styles/doktor.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <?php
    include('../pimpinan/tempPimpinan.php');
    // Load file koneksi.php
    include "../../dbConnect.php";
    ?>

</head>
<body>
<div class="topnav">
    <a href="../viewData/dataStatistik.php">Statistik Klinik</a>
    <a class="active" href="../viewData/dataDokter.php">Dokter</a>
    <a href="../viewData/dataPasien.php">Pasien</a>
    <a href="../dokter/daftarCatatan.php">Cari Data</a>
</div>
<div class="content">
    <h1>Ubah Jadwal Praktek</h1>
    <?php

    // Ambil data NIS yang dikirim oleh index.php melalui URL
    $idK = $_SESSION['idK'];
    $idJP = $_GET['id_jadwalPraktek'];

    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim

    ?>

    <table id="jadwalPraktek1">
        <tr>
            <?php
                $query2 = "SELECT * FROM jadwal_praktek WHERE id_jadwalPraktek='".$idJP."'";
                $sql2 = mysqli_query($conn, $query2);  // Eksekusi/Jalankan query dari variabel $query
                $data2 = mysqli_fetch_array($sql2); // Ambil data dari hasil eksekusi $sql
            ?>
            <th align="left">Hari Praktek Saat Ini</th>
            <td> : <?php echo ucfirst($data2['hari']); ?></td>

        </tr>
        <tr>
            <th align="left">Jam Mulai Praktek Saat Ini</th>
            <td> <p value="jam_selesai">: <?php echo $data2['jam_mulai']; ?></p></td>
        </tr>
        <tr>
            <th align="left">Jam Selesai Praktek Saat Ini</th>
            <td> <p value="jam_mulai">: <?php echo $data2['jam_selesai']; ?></p></td>
        </tr>
    </table>
    <h4>Jadwal Baru</h4>
    <form method="post" action="../../FormHandling/fhUbahJP.php?id_jadwalPraktek=<?php echo $data2['id_jadwalPraktek']?>" enctype="multipart/form-data">

        <table id="jadwalPraktek">
            <tr>
                <th colspan="3">Jadwal Praktek</th>
            </tr>
            <tr>
                <td rowspan="2">1</td>
                <td>Hari</td>
                <td>
                    <label for='hari[]'></label><br>
                    <select name="hari[]">
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>
                    <label for='jam[]'></label><br>
                    <select name="jam[]">
                        <option value="10.00">10.00</option>
                        <option value="10.30">10.30</option>
                        <option value="11.00">11.00</option>
                        <option value="10.30">11.30</option>
                        <option value="12.00">12.00</option>
                        <option value="12.30">12.30</option>
                        <option value="13.00">13.00</option>
                        <option value="13.30">13.30</option>
                        <option value="14.00">14.00</option>
                        <option value="14.30">14.30</option>
                        <option value="15.00">15.00</option>
                        <option value="15.30">15.30</option>
                        <option value="16.00">16.00</option>
                        <option value="16.30">16.30</option>
                        <option value="17.00">17.00</option>
                        <option value="17.30">17.30</option>
                    </select>
                </td>
            </tr>
        </table>

        <hr>
        <input name="formSubmit" type="submit" value="Simpan">

        <!--benerin tombol batal jadi button-->
        <a href="../viewData/dataDokter.php"><input type="button" value="Batal"></a>
    </form>
</div>
</body>
</html>
<script type="text/javascript" language="javascript">
    $(function() {
        $("#hari").change(function(){
            var studentNmae= $('option:selected', this).attr('value');
            $('#name').val(studentNmae);
        });
    });
</script>