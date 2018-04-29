<html>
<head>
    <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
<h1>Ubah Data Siswa</h1>

<?php
// Load file koneksi.php
include "../../dbConnect.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$idK = $_GET['id_karyawan'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM karyawan WHERE id_karyawan='".$idK."'";
$sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
?>

<form method="post" action="../../FormHandling/fhUbahDokter.php?id_karyawan=<?php echo $idK; ?>" enctype="multipart/form-data">
    <table cellpadding="8">
        <tr>
            <td>Nama Karyawab</td>
            <td><input type="text" name="nama_karyawan" value="<?php echo $data['nama_karyawan']; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" value="<?php echo $data['password']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Spesialisasi</td>
            <td>
                <?php
                if($data['nama_spesialisasi'] == "Gigi dan Mulut"){
                    echo"<input type='radio' name='nama_spesialisasi' value='Gigi dan Mulut' checked='checked'> Gigi dan Mulut";
                    echo"<input type='radio' name='nama_spesialisasi' value='Kandungan'> Kandungan";
                    echo"<input type='radio' name='nama_spesialisasi' value='Penyakit Dalam'> Penyakit Dalam";
                    echo"<input type='radio' name='nama_spesialisasi' value='Tulang'> Tulang";
                }
                else if($data['nama_spesialisasi'] == "Kandungan"){
                    echo"<input type='radio' name='nama_spesialisasi' value='Gigi dan Mulut' checked='checked'> Gigi dan Mulut";
                    echo"<input type='radio' name='nama_spesialisasi' value='Kandungan'> Kandungan";
                    echo"<input type='radio' name='nama_spesialisasi' value='Penyakit Dalam'> Penyakit Dalam";
                    echo"<input type='radio' name='nama_spesialisasi' value='Tulang'> Tulang";
                }
                else if($data['nama_spesialisasi'] == "Penyakit Dalam"){
                    echo"<input type='radio' name='nama_spesialisasi' value='Gigi dan Mulut' checked='checked'> Gigi dan Mulut";
                    echo"<input type='radio' name='nama_spesialisasi' value='Kandungan'> Kandungan";
                    echo"<input type='radio' name='nama_spesialisasi' value='Penyakit Dalam'> Penyakit Dalam";
                    echo"<input type='radio' name='nama_spesialisasi' value='Tulang'> Tulang";
                }
                else{
                    echo"<input type='radio' name='nama_spesialisasi' value='Gigi dan Mulut' checked='checked'> Gigi dan Mulut";
                    echo"<input type='radio' name='nama_spesialisasi' value='Kandungan'> Kandungan";
                    echo"<input type='radio' name='nama_spesialisasi' value='Penyakit Dalam'> Penyakit Dalam";
                    echo"<input type='radio' name='nama_spesialisasi' value='Tulang'> Tulang";
                }
                ?>
            </td>

        </tr>

        <tr>
            <td>Jabatan</td>
            <td>
                <?php
                    if($data['nama_spesialisasi'] == "Gigi dan Mulut"){
                        echo"<input type='radio' name='jabatan' value='Dokter' checked='checked'> Dokter";
                        echo"<input type='radio' name='jabatan' value='Pimpinan'> Pimpinan";
                    }
                    else{
                        echo"<input type='radio' name='jabatan' value='Dokter' > Dokter";
                        echo"<input type='radio' name='jabatan' value='Pimpinan' checked='checked'> Pimpinan";
                    }
                ?>
            </td>


        </tr>
        <tr>
            <td>Foto</td>
            <td>
                <input type="checkbox" name="ubah_foto" value="true"> Saya ingin mengubah foto<br>
                <input type="file" name="foto">
            </td>
        </tr>

    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="../ViewData/dataDokter.php"><input type="button" value="Batal"></a>
</form>
</body>
</html>