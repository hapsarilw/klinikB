<?php
    if(isset($_POST['submit'])) {
        session_unset();
        session_destroy();
        header("location: login.php?logout=success");
        exit();
    }
?>