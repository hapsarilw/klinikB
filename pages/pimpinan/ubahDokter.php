<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
        <script type="text/javascript" src="../../styles/doktor.js"></script>
        <?php
        include('tempPimpinan.php');
        ?>
    </head>
    <body>
        <div class="topnav">
            <a href="../viewData/dataStatistik.php">Statistik Klinik</a>
            <a class="active" href="../viewData/dataDokter.php">Dokter</a>
            <a href="../viewData/dataPasien.php">Pasien</a>
            <a href="../pimpinan/lihatdaftarcatatan.php">Daftar Catatan Pasien</a>
        </div>
        <div class="content">
            <h1>Ubah Data Dokter</h1>

            <?php
            // Load file koneksi.php
            include "../../dbConnect.php";

            $idK = $_GET['id_karyawan'];

            $query = "SELECT * FROM karyawan WHERE id_karyawan='".$idK."'";
            $sql = mysqli_query($conn, $query); 
            $data = mysqli_fetch_array($sql); 
            ?>

            <form method="post" action="../../FormHandling/fhUbahDokter.php?id_karyawan=<?php echo $idK; ?>" enctype="multipart/form-data">
                <table cellpadding="8">
                    <tr>
                        <td>Nama Karyawan</td>
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
                            if($data['id_spesialisasi'] == "1"){
                                echo"<input type='radio' name='nama_spesialisasi' value='Gigi dan Mulut' checked='checked'> Gigi dan Mulut";
                                echo"<input type='radio' name='nama_spesialisasi' value='Kandungan'> Kandungan";
                                echo"<input type='radio' name='nama_spesialisasi' value='Penyakit Dalam'> Penyakit Dalam";
                                echo"<input type='radio' name='nama_spesialisasi' value='Tulang'> Tulang";
                            }
                            else if($data['id_spesialisasi'] == "2"){
                                echo"<input type='radio' name='nama_spesialisasi' value='Gigi dan Mulut' checked='checked'> Gigi dan Mulut";
                                echo"<input type='radio' name='nama_spesialisasi' value='Kandungan'> Kandungan";
                                echo"<input type='radio' name='nama_spesialisasi' value='Penyakit Dalam'> Penyakit Dalam";
                                echo"<input type='radio' name='nama_spesialisasi' value='Tulang'> Tulang";
                            }
                            else if($data['id_spesialisasi'] == "Penyakit Dalam"){
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

                </table>

                <hr>
                <input type="submit" value="Ubah">
                <a href="../ViewData/dataDokter.php"><input type="button" value="Batal"></a>
            </form>
        </div>

    </body>
</html>