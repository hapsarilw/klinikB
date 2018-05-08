<html>
    <head>
        <title>Daftar Dokter</title>
        <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
        <script type="text/javascript" src="../../styles/doktor.js"></script>

        <?php
        include('../pimpinan/tempPimpinan.php');

                        $sql = "SELECT id_karyawan, count(id_pasien) as jumlahP FROM `pertemuan_dokterpasien` group by id_karyawan";
                        $res = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_array($res);

        ?>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="dataStatistik.php">Statistik Klinik</a>
            <a href="dataDokter.php">Dokter</a>
            <a href="dataPasien.php">Pasien</a>
            <a href="../pimpinan/lihatdaftarcatatan.php">Daftar Catatan Pasien</a>
        </div>
        <div class="content" >
            <h1>Statistik Dokter</h1>

            <div id="piechart"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([

                        ['Task', 'Hours per Day'],
                        ['".$data[id_karyawan]."','".$data[jumlahP]."'],
                        ['Eat', 2],
                        ['TV', 4],
                        ['Gym', 2],
                        ['Sleep', 8]
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {'title':'Jumlah Pasien untuk setiap dokter', 'width':550, 'height':400};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }
            </script>
        </div>

    </body>
</html>