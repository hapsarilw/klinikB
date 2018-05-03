<?php
// Load file koneksi.php
include "../dbConnect.php";

//$id_k = $_GET['id_karyawan'];

$namaK = $_POST['nama_karyawan'];
$email = $_POST['email'];
$password = $_POST['password'];
$namaSp = $_POST['jenisSp'];
$idSp = $_POST['id_spesialisasi'];
$jabatan = 'Dokter';

$query = "INSERT INTO karyawan(nama_karyawan, email, password, id_spesialisasi, jabatan) 
              VALUES('".$namaK."', '".$email."', '".$password."', '".$idSp."','".$jabatan."')";
$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));


if($sql){ 
//    $query2 = "INSERT INTO viewspesialisasidokter(nama_karyawan, email, password, id_spesialisasi, jenis_spesialisasi) 
//              VALUES('".$namaK."', '".$email."', '".$password."', '".$idSp."','".$namaSp."')";
//    $sql2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
    header("location: ../pages/viewData/dataDokter.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='fhDokter.php'>Kembali Ke Form</a>";
}
?>