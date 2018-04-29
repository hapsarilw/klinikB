<?php

session_start();

if(isset($_POST['submit'])) {
    include '../dbconnect.php';

    $emailK = mysqli_real_escape_string($conn, $_POST['emailK']);
    $pwK = mysqli_real_escape_string($conn, $_POST['pwK']);

    if(empty($emailK) || empty($pwK)) {
        header("location: ../pages/login.php?login=empty");
        exit();
    } else {
        $sql = "select * from karyawan where email='$emailK'";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck < 1) {
            header("location: ../pages/login.php?login=nouser");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)) {
                //dehash pw
//                $hashedcheck = password_verify($pwK, $row['password']);
//                if($hashedcheck == false) {
//                    header("location: ../pages/loginkaryawan.php?login=wrongpw");
//                    exit();
//                } elseif($hashedcheck == true) {
                    //login karyawan
                    $_SESSION['idK'] = $row['id_karyawan'];
                    $_SESSION['namaK'] = $row['nama_karyawan'];
                    $_SESSION['emailK'] = $row['email'];
                    $_SESSION['jabatan'] = $row['jabatan'];
                    $_SESSION['namaSp'] = $row['nama_spesialisasi'];
                    $_SESSION['foto'] = $row['foto'];
                    header("location: ../pages/viewdata/dataStatistik.php?login=success");
                    exit();
//                }
            }
        }
    }
} else {
    header("location: ../pages/login.php?login=noinput");
    exit();
}

?>