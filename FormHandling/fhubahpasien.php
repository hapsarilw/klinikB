<?php
// Load file koneksi.php
include "../dbConnect.php";

$idP = $_GET['id_pasien'];

$nama_pasien = $_POST['nama_pasien'];
$email = $_POST['email'];
$noTelp = $_POST['noTelp'];
$query = "SELECT * FROM pasien WHERE id_pasien='".$idP."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);

$query = "UPDATE pasien SET nama_pasien='".$nama_pasien."', email='".$email."', noTelp='".$noTelp."'";
$sql = mysqli_query($conn, $query); 

if($sql){ 
    //sukses
    header("location: http://localhost/GitHub/klinikB/pages/viewData/dataPasien.php");
}else{
    //gagal
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../pages/viewData/dataPasien.php'>Kembali Ke Form</a>";
}
?>