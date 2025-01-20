<?php
    
    session_start();
    
    $mysqli = new mysqli('localhost', 'root', '', 'tedc');

    $nim = $_GET['nim'];
    $delete = $mysqli->query("DELETE  FROM students WHERE nim='$nim'");

    if($delete) {
        $_SESSION['success'] = true;
        $_SESSION['message'] = 'Data Telah Dihapus';
        header("Location: mahasiswatedc.php");
        exit();
    }
?>