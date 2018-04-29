<html>
<head>
    <title>Tambah Dokter</title>
    <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
    <script type="text/javascript" src="../../styles/doktor.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <?php
        include('tempPimpinan.php');
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
    <h1>Tambah Jadwal Praktek</h1>
    <?php

        // Ambil data NIS yang dikirim oleh index.php melalui URL
        $idK = $_GET['id_karyawan'];

        // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
        $query1 = "SELECT id_karyawan, nama_karyawan, nama_spesialisasi FROM karyawan WHERE id_karyawan='".$idK."'";
        $sql1 = mysqli_query($conn, $query1);  // Eksekusi/Jalankan query dari variabel $query
        $data1 = mysqli_fetch_array($sql1); // Ambil data dari hasil eksekusi $sql
    ?>

        <table>
            <tr>
                <td>Nama Karyawan</td>
                <td><?php echo " : ". $data1['nama_karyawan']?></td>

            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td><?php echo " : ". $data1['nama_spesialisasi']?></td>
            </tr>
        </table>
        <h4>Jadwal Baru</h4>
    <form method="post" action="../../FormHandling/fhJP.php?id_karyawan=<?php echo $idK?>" enctype="multipart/form-data">
        <p style="width: 100px;white-space: nowrap;">
            <input style="background-color:#555555;" type="button" value="Add" onclick="addRowToTable();" />
            <input style="background-color:#555555;"  type="button" value="Remove" onclick="removeRowFromTable();" />
            <input style="background-color:#555555;"  type="button" value="Submit" onclick="validateRow(this.form);" />
            <input style="background-color:#555555;"  type="checkbox" id="chkValidate" /> Validate Submit
        </p>
        <p>
            <input type="checkbox" id="chkValidateOnKeyPress" checked="checked" /> Display OnKeyPress
            <span id="spanOutput" style="border: 1px solid #000; padding: 3px;"> </span>
        </p>
        <table id="jadwalPraktek">
            <tr>
                <th colspan="3">Jadwal Praktek</th>
            </tr>
            <tr>
                <td rowspan="2">1</td>
                <td>Hari</td>
                <td>
                    <label for='hari[]'>Select the countries that you have visited:</label><br>
                    <select multiple="multiple" name="hari[]">
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
                    <label for='jam[]'>Select the countries that you have visited:</label><br>
                    <select multiple="multiple" name="jam[]">
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