<html>
<head>
    <title>Tambah Dokter</title>
</head>
<body>

<h1>Tambah Data Siswa</h1>
<form method="post" action="../FormHandling/fhDokter.php" enctype="multipart/form-data">
    <table cellpadding="8">
        <tr>
            <td>Nama Karyawan</td>
            <td><input type="text" name="nama_karyawan"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Nama Spesialisasi</td>
            <td>
                <input type="radio" name="nama_spesialisasi" value="Gigi dan Mulut"> Gigi dan Mulut
                <input type="radio" name="nama_spesialisasi" value="Kandungan"> Kandungan
                <input type="radio" name="nama_spesialisasi" value="Penyakit Dalam"> Penyakit Dalam
                <input type="radio" name="nama_spesialisasi" value="Tulang"> Tulang
            </td>
        </tr>

        <tr>
            <td>Jabatan</td>
            <td>
                <input type="radio" name="jabatan" value="Dokter"> Dokter
                <input type="radio" name="jabatan" value="Pimpinan"> Pimpinan
            </td>


        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto"></td>
        </tr>
    </table>

    <hr>
    <input type="submit" value="Simpan">
    <a href="../tempPimpinan.php"><input type="button" value="Batal"></a>
</form>
</body>
</html>