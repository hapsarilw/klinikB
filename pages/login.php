<!DOCTYPE html>

<?php
session_start();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <title> Klinik Bersama </title>
    </head>

    <body>
        <?php
        include '../styles/mainlayout.php';
        ?>
        <div class="maincontainer">
            <h1>Karyawan Login</h1>
            <form action="../formhandling/fhlogin.php" method="post">
                E-mail Karyawan:<br>
                <input id="emailK" type="text" name="emailK" value="">
                <br><br>
                Password:<br>
                <input id="pwK" type="password" name="pwK" value="">
                <br><br>
                <input type="submit" class="button" name="submit" style="width:75px;" value="Login">
            </form>
        </div>
    </body>
</html>
