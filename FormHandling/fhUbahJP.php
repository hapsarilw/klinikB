<?php
// Load file koneksi.php
include "../dbConnect.php";
$idK = $_GET['id_karyawan'];
$idJP = $_GET['id_jadwalPraktek'];

if(isset($_POST['formSubmit'])){
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];

    $hari = (String)$hari2;
    $jamMulai1 = (String)$jam2;
    $jamMulai = (String)$jam2;

    if(substr("$jamMulai1", 3, 5)=="00"){
        $jamSelesai = (int)substr("$jamMulai", 0, 2);
        $jamSelesai = "".$jamSelesai.".30";
    }
    else{
        $jamSelesai = (int)substr("$jamMulai", 0, 2);
        $jamSelesai = $jamSelesai+1;
        $jamSelesai = "".$jamSelesai.".00";
    }

    $query = "UPDATE jadwal_praktek SET hari='".$hari."', jam_mulai='".$jamMulai1."', jam_selesai='".$jamSelesai."' WHERE id_jadwalPraktek='".$idJP."' ";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($sql){
        header("location: ../pages/viewData/dataJadwalPraktek.php?id_karyawan=.$idK &id_jadwalPraktek=.$idJP");
    }
    else{
        echo "Data Jadwal Praktek tidak masuk";
    }
}

$query = "UPDATE jadwal_praktek SET hari='".$hari."', jam_mulai='".$jamMulai."', jam_selesai='".$jamSelesai."' 
WHERE id_jadwalPraktek='".$idJP."'";
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