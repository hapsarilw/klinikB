<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../styles/main.css">
        <title> Klinik Bersama </title>
    </head>

    <body>
        <?php
        //include '../../styles/mainlayout.php';
        include '../../dbconnect.php';

        ?>
        <div class="maincontainer">
            <a href="../../index.html">
                <img src="../../img/logopng1.png" style="height: 100px; width: 100px;">
            </a>
            <h1>Form Pendaftaran Pasien</h1>
            <form action="pendaftaranPasien2.php" method="post">
                Nama Lengkap: <br>
                <input type="text" name="namaP" value="" required><br>

                E-mail: <br>
                <input type="text" name="emailP" value="" required><br>

                No. telepon: <br>
                <input type="text" name="noTelp" value="" required><br>
                
                <input type="submit" class="button" style="width:75px;" value="Lanjut">
            </form>
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
