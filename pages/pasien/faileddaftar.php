<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="refresh" content="5; URL=pendaftaranpasien.php">
        <link rel="stylesheet" type="text/css" href="../../styles/main.css">
        <title> Klinik Bersama </title>
    </head>

    <body>
        <?php
        //include '../../styles/mainlayout.php';
        include '../../dbconnect.php';

        ?>
        <div class="maincontainer">
            <h2>Maaf, anda tidak berhasil didaftarkan!</h2><br>
            <p>
                Pendaftaran anda tidak berhasil dilakukan dikarenakan jadwal praktek dokter yang anda pilih sudah dipesan oleh pasien lain.
                <br><br>
                Silahkan memilih jadwal praktek dokter atau dokter lainnya.
                <br><br>
                Anda akan diarahkan untuk kembali ke halaman pendaftaran dalam 5 detik. Jika tidak ada yang terjadi, silahkan tekan tautan berikut.
                <br><br><br>
                <a href="pendaftaranPasien.php" style="text-decoration: underline; color:blue">Kembali ke halaman utama</a>
            </p>
        </div>
    </body>
    <script>
        //        var x=document.getElementById("jenisSP");
        //        var abc = x.options(x.selectedIndex).value;

        var x = "";

        function apaun(sel){
            x = sel.options[sel.selectedIndex].text;
            y = sel.options[sel.selectedIndex].value;
            console.log(x);
            console.log(y);
        }

        function listenerND(sel) {
            nd = sel.options[sel.getSelectedIndex].text;
            nd2 = sel.options[sel.selectedIndex].value;
        }

        //        console.log(x);
    </script>
</html>
