<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Klinik Bersama </title>
    </head>

    <body>
        <?php
        //include '../../styles/mainlayout.php';
        include '../../dbconnect.php';

        ?>
        <div class="maincontainer">
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
                    <option value="none">None</option>
                    <option value="penyakitdalam">Penyakit Dalam</option>
                    <option value="umum">Umum</option>
                    <option value="kandungan">Kandungan</option>
                    <option value="anak">Anak</option>
                </select>
                <br>

                Nama Dokter: <br>

                <select id="namaD" name="namaD" required>
                    <option value="none">None</option>
                    <?php
                    $namaSp = $_POST['jenisSP'];
                    
                    $query = "SELECT * FROM # where jenis_spesialisasi = '$namaSp'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        echo "<option value=''>".$data['nama_dokter']."</option>";
                    }
                    ?>
                </select>
                <br>

                Hari Pertemuan: <br>
                <select id="hari_pertemuan" name="hariPertemuan" required>
                    <option value="none">None</option>
                    <?php
                    $namaD = $_POST['namaD'];
                    
                    $query = "SELECT * FROM # where nama_dokter = '$namaD'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        echo "<option value=''>".$data['hariPertemuan']."</option>";
                    }
                    ?>
                </select>
                <br>

                Jam Pertemuan: <br>
                <select id="jam_pertemuan" name="jamPertemuan" required>
                    <option value="none">None</option>
                    <?php
                    $hariPertemuan = $_POST['hariPertemuan'];
                    
                    $query = "SELECT * FROM # where hariPertemuan = '$hariPertemuan'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        echo "<option value=''>".$data['hariPertemuan']."</option>";
                    }
                    ?>
                </select>
                <br><br><br>

                <input type="submit" class="button" style="width:75px;" value="Lanjut">
            </form>
        </div>
    </body>
</html>
