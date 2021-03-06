<!DOCTYPE html>
<?php
session_start();

include '../../dbconnect.php';
?>
<html>
    <style>
        .logoutbutton {
            background: none;
            border: none;
            color: black;
            padding: 5px;
            text-align: center;
            font-size: 18px;
            cursor: pointer;
            margin:5px;
            border-radius: 5px;
            width: 150px;
        }
    </style>
    <head>
        <link rel="stylesheet" type="text/css" href="../../styles/doktor.css">
        <script type="text/javascript" src="../../styles/doktor.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div id="pageBar">
            <div class="sidenav">
                <img id="fotoProfil" src="../../img/user.png" alt="fotoDokter">
                <?php
                echo "<p id='namaD'>".$_SESSION['namaK']."</p>";
                echo "<p id='namaD'>".$_SESSION['idK']."</p>";
                echo "<p id='namaD'>".$_SESSION['jabatan']."</p>";
                echo "<p id='namaD'>".$_SESSION['emailK']."</p>";
                ?>
                <div id="logout">
                    <form action="../logout.php" method="post">
                        <a name="submit">
                            <button type="submit" name="submit" class="logoutbutton">
                                <img style="width: 20px; height: 20px" src='../../img/logout.png'/>Logout
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>