<?php include ("C:/xampp/htdocs/KT/config.php"); session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login");
    exit;
}

session_start();
include ("C:/xampp/htdocs/KT/config.php");

if(isset($_GET['koht'])) {
    $valitudkohtid = $_GET['koht'];
    $valitudkohtparing = "SELECT nimi FROM kohad WHERE id = '$valitudkohtid'";
    $valitud_koht = $yhendus -> query($valitudkohtparing);
    $row = mysqli_fetch_assoc($valitud_koht);

    $sqlKustutaAsutus = "DELETE FROM kohad WHERE id = '$valitudkohtid'";
    if ($yhendus -> query($sqlKustutaAsutus) === TRUE) {
        header("Location: /KT/admin/");
        exit;
    } else {
        echo "viga kutsutsatmisel " . $yhendus -> error;
    }
} else {
    header("Location: /KT/admin/");
}

$yhendus->close(); ?>
