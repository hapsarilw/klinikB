<?php
// Load file koneksi.php
include "../dbConnect.php";

//$id_p = $_GET['id_pasien'];

$namaP = $_POST['namaP'];
$emailP = $_POST['emailP'];
$noTelp = $_POST['noTelp'];
$namaSp = $_POST['jenisSp'];
$namaD = $_POST['namaD'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

$query = "INSERT INTO pasien(nama_pasien, email, noTelp) 
              VALUES('".$namaP."','".$emailP."','".$noTelp."')";

$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

$query2 = "SELECT id_karyawan FROM karyawan where nama_karyawan = '".$namaD."'";
$sql2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));

$query3 = "SELECT id_pasien from pasien where nama_pasien = '".$namaP."'";
$sql3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));

$query4 = "INSERT INTO pertemuan_dokterpasien(id_karyawan, id_pasien, hari, jam_pertemuan) VALUES(".$query2.", ".$query3.", '".$hari."', '".$jam."')";
$sql4 = mysqli_query($conn, $query4) or die(mysqli_error($conn));

if($sql4){ 
    header("location: ../pages/viewData/dataPasien.php");
    exit();
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='fhDaftarPasien.php'>Kembali Ke Form</a>";
}
?>
