<!DOCTYPE html>
<?php
$namaP = $_POST['namaP'];
$emailP = $_POST['emailP'];
$noTelp = $_POST['noTelp'];
$jenisSp = $_POST['jenisSp'];

echo "<input type=text value='$namaP' name='namaP' style='display:none'>";
echo "<input type=text value='$emailP' name='emailP' style='display:none'>";
echo "<input type=text value='$noTelp' name='noTelp' style='display:none'>";
echo "<input type=text value='$jenisSp' name='jenisSp' style='display:none'>";
?>
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
            <form action="pendaftaranpasien4.php" method="post">
                Nama Dokter: <br>

                <select id="namadok" name="namadok" onChange="apaun(this)" required>
                    <option value="none" selected=true disabled>None</option>
                    <?php

                    $query = "SELECT nama_karyawan FROM viewspesialisasidokter where jenis_spesialisasi = '$jenisSp'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
                        $namaK = $data['nama_karyawan'];
                        echo "<option value='".$namaK."'>".$namaK."</option>";
                    }
                    ?>
                    <input type=text id="namaD" name="namaD" value="<?php echo $namaK?>"  style="display:none">
                    <input type=text value='<?php echo $namaP?>' name='namaP' style='display:none'>
                    <input type=text value='<?php echo $emailP?>' name='emailP' style='display:none'>
                    <input type=text value='<?php echo $noTelp?>' name='noTelp' style='display:none'>
                    <input type=text value='<?php echo $jenisSp?>' name='jenisSp' style='display:none'>
                </select>
                <br>
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
            var result=document.getElementById("namaD");
            result.value=x;
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
