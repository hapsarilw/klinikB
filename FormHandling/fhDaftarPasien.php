<?php
// Load file koneksi.php
include "../dbConnect.php";

$id_p = $_GET['id_pasien'];

$namaP = $_POST['namaP'];
$emailP = $_POST['emailP'];
$noTelp = $_POST['telpP'];
$namaSp = $_POST['jenisSP'];
$namaD = $_POST['namaD'];
$hariPertemuan = $_POST['hariPertemuan'];
$jamPertemuan = $_POST['jamPertemuan'];

$query = "INSERT INTO pasien(nama_pasien, email, noTelp) 
              VALUES('".$namaP."','".$emailP."','".$noTelp."')";
$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($sql){ 
    header("location: ../pages/pasien/pendaftaranpasien2.php");
    exit();
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='fhDaftarPasien.php'>Kembali Ke Form</a>";
}
?>
