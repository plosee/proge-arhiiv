<?php session_start();
include ("C:/xampp/htdocs/KT/config.php");

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit;
}

if(isset($_GET['kommentaar'])) {
    $valitudkoemmentaar = $_GET['kommentaar'];
    $valitudId = $_SESSION['id'];

    $kustutamisparing = "DELETE FROM hinnangud WHERE kommentaar = '$valitudkoemmentaar'";
    if ($yhendus->query($kustutamisparing) === TRUE) {
        header("Location: /KT/admin/lisahinnang.php?koht=$valitudId");
        exit;
    }
}

$yhendus->close(); ?>
