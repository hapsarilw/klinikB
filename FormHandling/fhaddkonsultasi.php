<?php
// Load file koneksi.php
include "../dbConnect.php";

$idP = $_GET['id_pasien'];
$idK = $_GET['id_karyawan'];

$isi_catatan = $_POST['isi_catatan'];
$id_pertemuan = $_POST['id_pertemuan'];
$namaP = $_POST['nama_pasien'];
$namaK = $_POST['nama_karyawan'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$currdate = date('Y/m/d H:i:s');

//echo "<input type='text' value='".$idP."'></input>";
//echo "<input type='text' value='".$idK."'></input>";


//$query0 = 
//$sql0 = mysqli_query($conn, $query0);
//$data0 = mysqli_fetch_array($sql0);
//$booked = "N";
//var_dump($data0);

$query = "INSERT INTO hasil_konsultasi(waktu_perubahan, isi_catatan, id_karyawan, id_pasien)
    VALUES('".$currdate."','".$isi_catatan."','".$idK."', '".$idP."')";
$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

//$query2 = "INSERT INTO viewpasienkonsultasi(nama_pasien, nama_karyawan, waktu_perubahan, idStatus)
//    VALUES('".$namaP."','".$namaK."','".currdate."', '1')";
//$sql2 = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($sql){     
    $query6 = "update pertemuan_dokterpasien set statusPenanganan='Y' where id_pertemuan='".$id_pertemuan."'";
    $sql6 = mysqli_query($conn, $query6);
    header("location: ../pages/dokter/daftarcatatanpasien.php?register=success");
    exit();
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href=''>Kembali Ke Form</a>";
}
?>

