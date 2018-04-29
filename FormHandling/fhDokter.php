<?php
// Load file koneksi.php
include "../dbConnect.php";

// Ambil Data yang Dikirim dari Form
$id_k = $_GET['id_karyawan'];

$namaK = $_POST['nama_karyawan'];
$email = $_POST['email'];
$password = $_POST['password'];
$namaSp = $_POST['nama_spesialisasi'];
$jabatan = $_POST['jabatan'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobar = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "C:/xampp/htdocs/GitHub/klinikB/viewData/imgDokter/img".$fotobar;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Proses simpan ke Database
    $query = "INSERT INTO karyawan(nama_karyawan, email, password, nama_spesialisasi, jabatan, foto) 
              VALUES('".$namaK."', '".$email."', '".$password."', '".$namaSp."','".$jabatan."', '".$fotobaru."')";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn)); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: ../viewData/dataDokter.php"); // Redirect ke halaman index.php
    }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='fhDokter.php'>Kembali Ke Form</a>";
    }
}else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='fhDokter.php'>Kembali Ke Form</a>";
}
?>