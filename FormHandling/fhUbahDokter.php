<?php
// Load file koneksi.php
include "../dbConnect.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$idK = $_GET['id_karyawan'];
// Ambil Data yang Dikirim dari Form
$nama_karyawan = $_POST['nama_karyawan'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama_spesialisasi = $_POST['nama_spesialisasi'];
$jabatan = $_POST['jabatan'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
    // Ambil data foto yang dipilih dari form
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;

    // Set path folder tempat menyimpan fotonya
    $path = "imgDokter/".$fotobaru;
    // Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
        $query = "SELECT nama_karyawan, email, password, nama_spesialisasi, jabatan, foto FROM karyawan WHERE id_karyawan='".$idK."'";
        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
        // Cek apakah file foto sebelumnya ada di folder images
        if(is_file("imgDokter/".$data['foto'])) // Jika foto ada
            unlink("imgDokter/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images

        // Proses ubah data ke Database
        $query = "UPDATE karyawan SET nama_karyawan='".$nama_karyawan."', email='".$email."', password='".$password."', 
        nama_spesialisasi='".$nama_spesialisasi."', jabatan='".$jabatan."', foto='".$fotobaru."' WHERE id_karyawan='".$idK."'";
        $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            header("location: http://localhost/GitHub/klinikB/pages/viewData/dataDokter.php");
        }else{
            // Jika Gagal, Lakukan :
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='../pages/viewData/dataDokter.php'>Kembali Ke Form</a>";
        }
    }else{
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='../pages/viewData/dataDokter.php'>Kembali Ke Form</a>";
    }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
    // Proses ubah data ke Database
    $query = "UPDATE karyawan SET nama_karyawan='".$nama_karyawan."', email='".$email."', password='".$password."', 
        nama_spesialisasi='".$nama_spesialisasi."', jabatan='".$jabatan."' WHERE id_karyawan='".$idK."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // Redirect ke halaman index.php
        header("location: http://localhost/GitHub/klinikB/pages/viewData/dataDokter.php");
    }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='../pages/viewData/dataDokter.php'>Kembali Ke Form</a>";
    }
}
?>