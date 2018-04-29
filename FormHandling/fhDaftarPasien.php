<?php
// Load file koneksi.php
include "../dbConnect.php";

// Ambil Data yang Dikirim dari Form
$id_p = $_GET['id_pasien'];

$namaP = $_POST['namaP'];
$emailP = $_POST['emailP'];
$namaSp = $_POST['jenisSP'];
$namaD = $_POST['namaD'];
$tglPertemuan = $_POST['tglPertemuan'];
$jamPertemuan = $_POST['jamPertemuan'];

// Proses simpan ke Database

//ganti ke tabel pesanpertemuan
$query = "INSERT INTO pesanpertemuan(, , , , , ) 
              VALUES('".$namaK."', '".$email."', '".$password."', '".$namaSp."','".$jabatan."', '".$fotobaru."')";
$sql = mysqli_query($conn, $query) or die(mysqli_error($conn)); // Eksekusi/ Jalankan query dari variabel $query
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: ../viewData/dataDokter.php"); // Redirect ke halaman index.php
}else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='fhDokter.php'>Kembali Ke Form</a>";
}
?>
