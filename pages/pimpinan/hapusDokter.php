<?php
// Load file koneksi.php
include "../../dbConnect.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$idK = $_GET['id_karyawan'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM karyawan WHERE id_karyawan='".$idK."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
var_dump($data);
// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
    unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM karyawan WHERE id_karyawan='".$idK."'";
$sql2 = mysqli_query($conn, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: http://localhost/GitHub/klinikB/pages/viewdata/dataDokter.php");
}else{
    // Jika Gagal, Lakukan :
    echo "Data gagal dihapus. <a href='/github/klinikB/pages/viewData/dataDokter.php'>Kembali</a>";
}
?>