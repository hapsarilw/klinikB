<?php
// Load file koneksi.php
include "../dbConnect.php";

if(isset($_GET['formSubmit']))
{
    $idK = $_GET['id_karyawan'];
    $idJP = $_GET['id_jadwalPraktek'];
    $hari = $_GET['hari'];
    $jamMulai1 = $_GET['jam'];
    $jamMulai = $_GET['jam'];



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

    $check = "select hari, jam_mulai, jam_selesai from jadwal_praktek where id_jadwalPraktek=".$idJP." ";
    $sqlCheck = mysqli_query($conn, $check) or die(mysqli_error($conn));
    $data1 = mysqli_fetch_array($sqlCheck);



    if($data1){
        header("location: ../pages/viewData/dataJadwalPraktek.php?id_karyawan=.$idK.&id_jadwalPraktek=.$idJP.");
    }
    else{
        echo "Data Perubahan Jadwal Praktek tidak masuk";
    }
}
else{
    echo "Gagal";
}





?>