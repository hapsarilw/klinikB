<!DOCTYPE html>
<!DOCTYPE html>
<?php
$namaP = $_POST['namaP'];
$emailP = $_POST['emailP'];
$noTelp = $_POST['noTelp'];
$jenisSp = $_POST['jenisSp'];
$namaD = $_POST['namaD'];
$hari = $_POST['hari'];

echo "<input type=text value='$namaP' name='namaP' style='display:none'>";
echo "<input type=text value='$emailP' name='emailP' style='display:none'>";
echo "<input type=text value='$noTelp' name='noTelp' style='display:none'>";
echo "<input type=text value='$jenisSp' name='jenisSp' style='display:none'>";
echo "<input type=text value='$namaD' name='namaD' style='display:none'>";
echo "<input type=text value='$hari' name='hari' style='display:none'>";
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
            <form action="../../formhandling/fhdaftarpertemuan.php" method="post">

                Jam Pertemuan: <br>
                <select id="jam_pertemuan" name="jamPertemuan" required>
                    <option value="none">None</option>
                    <?php

                    $query = "SELECT jam_mulai, jam_selesai FROM viewjpdokter where hari = '$hari' and nama_karyawan = '$namaD'"; 
                    $sql = mysqli_query($conn, $query); 

                    while($data = mysqli_fetch_array($sql)){ 
//                        $data1 = $data['jam_mulai'];
//                        $data2 = $data['jam_selesai'];
//                        $jam = $data1.'-'.$data2;
                        echo "<option value=''>".$data['jam_mulai']."</option>";
                    }
                    ?>
                    <input type=text id="jam" name="jam" value="" style="display:none">
                    <input type=text value='<?php echo $namaP?>' name='namaP' style='display:none'>
                    <input type=text value='<?php echo $emailP?>' name='emailP' style='display:none'>
                    <input type=text value='<?php echo $noTelp?>' name='noTelp' style='display:none'>
                    <input type=text value='<?php echo $jenisSp?>' name='jenisSp' style='display:none'>
                    <input type=text value='<?php echo $namaD?>' name='namaD' style='display:none'>
                    <input type=text value='<?php echo $hari?>' name='hari' style='display:none'>
                </select>
                <br><br>
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
            var result=document.getElementById("jam");
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
