<?php
// Load file koneksi.php
include "../dbConnect.php";

$id_k = $_GET['id_karyawan'];

$namaK = $_POST['nama_karyawan'];
$email = $_POST['email'];
$password = $_POST['password'];
$namaSp = $_POST['nama_spesialisasi'];
$jabatan = 'Dokter';
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobar = date('dmYHis').$foto;

$path = "C:/xampp/htdocs/GitHub/klinikB/pages/viewData/imgDokter/img".$fotobar;

if(move_uploaded_file($tmp, $path)){
    $query = "INSERT INTO karyawan(nama_karyawan, email, password, nama_spesialisasi, jabatan, foto) 
              VALUES('".$namaK."', '".$email."', '".$password."', '".$namaSp."','".$jabatan."', '".$fotobaru."')";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($sql){ 
        header("location: ../pages/viewData/dataDokter.php");
    }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='fhDokter.php'>Kembali Ke Form</a>";
    }
}else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='fhDokter.php'>Kembali Ke Form</a>";
}
?>