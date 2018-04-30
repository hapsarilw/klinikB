<?php
// Load file koneksi.php
include "../dbConnect.php";

$id_k = $_GET['id_karyawan'];
$namaK = $_POST['nama_karyawan'];
$email = $_POST['email'];
$password = $_POST['password'];
$namaSp = $_POST['nama_spesialisasi'];
$jabatan = 'Dokter';

if($namaSp == "Gigi dan Mulut"){
    $namaSp = (int) 1;
}
else if($namaSp == "Kandungan"){
    $namaSp =(int) 2;
}
else if($namaSp == "Penyakit Dalam"){
    $namaSp =(int) 3;
}
else {
    $namaSp =(int) 4;
}


    $query = "UPDATE karyawan SET nama_karyawan='$namaK',email='$email',password='$password',id_spesialisasi='$namaSp'  WHERE id_karyawan='$id_k' ";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if($sql){
        header("location: ../pages/viewData/dataDokter.php");
    }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='fhDokter.php'>Kembali Ke Form</a>";
    }


?>