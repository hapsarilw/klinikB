<?php
// Load file koneksi.php
include "../dbConnect.php";

$idJP = $_GET['id_jadwalPraktek'];


if(isset($_POST['formSubmit']))
{
    $hari = $_POST['hari'];
    $jamMulai2 = $_POST['jam'];
    $jamMulai1 = $_POST['jam'];
    $jamMulai = $_POST['jam'];

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
            VALUES('".$jamMulai2."', '".$jamSelesai."', '".$hari."', '".$idK."')";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if($sql){
        header("location: ../pages/viewData/dataJadwalPraktek.php?id_karyawan=".$idK."");
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