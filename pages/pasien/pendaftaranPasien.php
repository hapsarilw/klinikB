<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../styles/main.css">
        <title> Klinik Bersama </title>
    </head>

    <body>
        <?php
        //include '../../styles/mainlayout.php';
        include '../../dbconnect.php';

        ?>
        <div class="maincontainer">
            <a href="../../index.html">
                <img src="../../img/logopng1.png" style="height: 100px; width: 100px;">
            </a>
            <h1>Form Pendaftaran Pasien</h1>
            <form action="../../formhandling/fhdaftarpasien.php" method="post">
                Nama Lengkap: <br>
                <input type="text" name="namaP" value="" required><br>

                E-mail: <br>
                <input type="text" name="emailP" value="" required><br>

                No. telepon: <br>
                <input type="text" name="telpP" value="" required><br>

                Jenis Spesialisasi Dokter: <br>
                <select id="jenisSP" name="jenisSP" required>
                    <?php
                                
                    $query = "SELECT jenis_spesialisasi FROM spesialisasi"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        echo "<option value=''>".$data['jenis_spesialisasi']."</option>";
                    }
                    ?>
                </select>
                <br>

                Nama Dokter: <br>

                <select id="namaD" name="namaD" required>
                    <option value="none">None</option>
                    <?php
                    $namaSp = $_POST['jenisSP'];
                    
                    $query = "SELECT nama_karyawan FROM viewspesialisasidokter where jenis_spesialisasi = '$namaSp'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        echo "<option value=''>".$data['nama_karyawan']."</option>";
                    }
                    ?>
                </select>
                <br>

                Hari Pertemuan: <br>
                <select id="hari_pertemuan" name="hariPertemuan" required>
                    <option value="none">None</option>
                    <?php
                    $namaD = $_POST['namaD'];
                    
                    $query = "SELECT hari FROM viewjpdokter where nama_karyawan = '$namaD'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        echo "<option value=''>".$data['hari']."</option>";
                    }
                    ?>
                </select>
                <br>

                Jam Pertemuan: <br>
                <select id="jam_pertemuan" name="jamPertemuan" required>
                    <option value="none">None</option>
                    <?php
                    $hariPertemuan = $_POST['hariPertemuan'];
                    
                    $query = "SELECT jam_mulai, jam_selesai FROM viewjpdokter where hariPertemuan = '$hariPertemuan'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        $data1 = $data['jam_mulai'];
                        $data2 = $data['jam_selesai'];
                        $jam = $data1.'-'.$data2;
                        echo "<option value=''>".$jam."</option>";
                    }
                    ?>
                </select>
                <br><br><br>

                <input type="submit" class="button" style="width:75px;" value="Lanjut">
            </form>
        </div>
    </body>
</html>
