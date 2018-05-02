<?php
// Load file koneksi.php
include "../dbConnect.php";

//$id_p = $_GET['id_pasien'];

$namaP = $_POST['namaP'];
$emailP = $_POST['emailP'];
$noTelp = $_POST['noTelp'];
$namaSp = $_POST['jenisSp'];
$namaD = $_POST['namaD'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$jamMulai = $_POST['jamMulai'];
$jamSelesai = $_POST['jamSelesai'];


$query0 = "select statusBooking from praktekdokter where nama_karyawan='".$namaD."' and hari='".$hari."' and jam_mulai='".$jamMulai."' and jam_selesai='".$jamSelesai."'";
$sql0 = mysqli_query($conn, $query0);
$data0 = mysqli_fetch_array($sql0);
//$booked = "N";
//var_dump($data0);

if($data0[0] == "N") {
    $query = "INSERT INTO pasien(nama_pasien, email, noTelp) 
              VALUES('".$namaP."','".$emailP."','".$noTelp."')";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));


    $query2 = "SELECT id_karyawan FROM karyawan where nama_karyawan='".$namaD."'";
    $sql2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
    $data2 = mysqli_fetch_array($sql2);

//    var_dump($sql2);

    
$query3 = "SELECT id_pasien from pasien where nama_pasien='".$namaP."'";
$sql3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
$data3 = mysqli_fetch_array($sql3);


    $query4 = "INSERT INTO pertemuan_dokterpasien(id_karyawan, id_pasien, hari, jam_pertemuan) VALUES('".$data2['id_karyawan']."', '".$data3['id_pasien']."', '".$hari."', '".$jam."')";
    $sql4 = mysqli_query($conn, $query4) or die(mysqli_error($conn));
//    var_dump($sql4);
    
    $query5 = "select id_jadwalPraktek from praktekdokter where nama_karyawan='".$namaD."' and hari='".$hari."' and jam_mulai='".$jamMulai."' and jam_selesai='".$jamSelesai."'";
    $sql5 = mysqli_query($conn, $query5);
    $data5 = mysqli_fetch_array($sql5);
    

    if($sql4){ 
        $query6 = "update jadwal_praktek set statusBooking='Y' where id_jadwalPraktek='".$data5[0]."'";
        $sql6 = mysqli_query($conn, $query6);
        header("location: ../pages/pasien/afterdaftar.php?register=success");
        exit();
    }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='../pages/pasien/pendaftaranPasien.php'>Kembali Ke Form</a>";
    }
} else {
    header("location: ../pages/pasien/faileddaftar.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Title </title>
    </head>

    <body>
        <input type=text value='<?php echo $jamMulai?>' name='jamMulai' style='display:'>
        <input type=text value='<?php echo $jamSelesai?>' name='jamSelesai' style='display:'>
    </body>
</html>

