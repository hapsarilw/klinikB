<?php
// Load file koneksi.php
include "../dbConnect.php";

$idK = $_GET['id_karyawan'];

$nama_karyawan = $_POST['nama_karyawan'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama_spesialisasi = $_POST['nama_spesialisasi'];
$jabatan = $_POST['jabatan'];

if(isset($_POST['ubah_foto'])){ 

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').$foto;

    $path = "imgDokter/".$fotobaru;

    // Proses upload
    if(move_uploaded_file($tmp, $path)){ 
        $query = "SELECT nama_karyawan, email, password, nama_spesialisasi, jabatan, foto FROM karyawan WHERE id_karyawan='".$idK."'";
        $sql = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($sql);

        if(is_file("imgDokter/".$data['foto']))
            unlink("imgDokter/".$data['foto']);

        $query = "UPDATE karyawan SET nama_karyawan='".$nama_karyawan."', email='".$email."', password='".$password."', 
        nama_spesialisasi='".$nama_spesialisasi."', jabatan='".$jabatan."', foto='".$fotobaru."' WHERE id_karyawan='".$idK."'";
        $sql = mysqli_query($connect, $query); 

        if($sql){ 
            //sukses
            header("location: http://localhost/GitHub/klinikB/pages/viewData/dataDokter.php");
        }else{
            //gagal
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='../pages/viewData/dataDokter.php'>Kembali Ke Form</a>";
        }
    }else{
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='../pages/viewData/dataDokter.php'>Kembali Ke Form</a>";
    }
}else{
    $query = "UPDATE karyawan SET nama_karyawan='".$nama_karyawan."', email='".$email."', password='".$password."', 
        nama_spesialisasi='".$nama_spesialisasi."', jabatan='".$jabatan."' WHERE id_karyawan='".$idK."'";
    $sql = mysqli_query($conn, $query);
    if($sql){ 
        //sukses
        header("location: http://localhost/GitHub/klinikB/pages/viewData/dataDokter.php");
    }else{
        //gagal
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='../pages/viewData/dataDokter.php'>Kembali Ke Form</a>";
    }
}
?>