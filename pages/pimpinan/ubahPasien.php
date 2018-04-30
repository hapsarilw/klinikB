<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Ubah Data Pasien</h1>

        <?php
        // Load file koneksi.php
        include "../../dbConnect.php";

        $idP = $_GET['id_pasien'];

        $query = "SELECT * FROM pasien WHERE id_pasien='".$idP."'";
        $sql = mysqli_query($conn, $query); 
        $data = mysqli_fetch_array($sql); 
        ?>

        <form method="post" action="../../FormHandling/fhUbahPasien.php?id_pasien=<?php echo $idP; ?>" enctype="multipart/form-data">
            <table cellpadding="8">
                <tr>
                    <td>Nama Pasien</td>
                    <td><input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><input type="text" name="noTelp" value="<?php echo $data['noTelp']; ?>"></td>
                </tr>

            </table>

            <hr>
            <input type="submit" value="Ubah">
            <a href="../ViewData/dataPasien.php"><input type="button" value="Batal"></a>
        </form>
    </body>
</html>