<?php
// Load file koneksi.php
include "../dbConnect.php";



// Ambil Data yang Dikirim dari Form
$idK = $_GET['id_karyawan'];

if(isset($_POST['formSubmit']))
{
    $hari2 = $_POST['hari'];
    $jam2 = $_POST['jam'];

    $hari = (String)$hari2[0];
    $jamMulai1 = (String)$jam2[0];
    $jamMulai = (String)$jam2[0];

    if(substr("$jamMulai1", 3, 5)=="00"){
        $jamSelesai = (int)substr("$jamMulai", 0, 2);
        $jamSelesai = "".$jamSelesai.".30";
    }
    else{
        $jamSelesai = (int)substr("$jamMulai", 0, 2);
        $jamSelesai = $jamSelesai+1;
        $jamSelesai = "".$jamSelesai.".00";
    }

    $query = "INSERT INTO jadwal_praktek(jam_mulai,jam_selesai,hari,id_karyawan) 
            VALUES('".$jamMulai."', '".$jamSelesai."', '".$hari."', '".$idK."')";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($sql){
        header("location: ../pages/viewData/dataJadwalPraktek.php?id_karyawan=".$idK."");
    }
    else{
        echo "Data Jadwal Praktek tidak masuk";
    }
}
?>