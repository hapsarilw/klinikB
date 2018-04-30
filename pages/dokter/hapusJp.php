<?php
// Load file koneksi.php
include "../../dbConnect.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$idK = $_GET['id_karyawan'];
$idJP = $_GET['id_jadwalPraktek'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim

$query2 = "DELETE FROM jadwal_praktek WHERE id_jadwalPraktek='".$idJP."'";
$sql2 = mysqli_query($conn, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: http://localhost/GitHub/klinikB/pages/viewdata/dataJadwalPraktek.php");
}else{
    // Jika Gagal, Lakukan :
    echo "Data gagal dihapus. <a href='/github/klinikB/pages/viewData/dataJadwalPraktek.php'>Kembali</a>";
}
?>