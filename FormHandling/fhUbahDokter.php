<?php
// Load file koneksi.php
include "../dbConnect.php";

$idJP = $_GET['id_jadwalPraktek'];

$jamMulai = $_POST['nama_karyawan'];
$jamSelesai = $_POST['email'];


$query = "UPDATE jadwalPraktek SET jam_mulai='".$jamMulai."', jam_selesai='".$jamSelesai."' WHERE id_jadwalPraktek='".$idJP."'";
$sql = mysqli_query($connect, $query);

if($sql){
    //sukses
    header("location: http://localhost/GitHub/klinikB/pages/viewData/dataDokter.php");
}else{
    //gagal
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../pages/viewData/dataDokter.php'>Kembali Ke Form</a>";
}
?>