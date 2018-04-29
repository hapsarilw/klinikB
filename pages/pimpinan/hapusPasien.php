<?php
// Load file koneksi.php
include "../../dbConnect.php";

// Ambil data idp yang dikirim oleh index.php melalui URL
$idP = $_GET['id_pasien'];

// Query untuk menampilkan data berdasarkan idp yang dikirim
$query = "SELECT * FROM pasien WHERE id_pasien='".$idP."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
var_dump($data);

// Query untuk menghapus data berdasarkan idp yang dikirim
$query2 = "DELETE FROM pasien WHERE id_pasien='".$idP."'";
$sql2 = mysqli_query($conn, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: http://localhost/GitHub/klinikB/pages/viewdata/dataPasien.php?delete=success");
}else{
    // Jika Gagal, Lakukan :
    echo "Data gagal dihapus. <a href='/github/klinikB/pages/viewData/dataPasien.php?delete=fail'>Kembali</a>";
}
?>