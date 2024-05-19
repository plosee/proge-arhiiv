<?php
$kasutaja = "mlaane";
$dbserver = "localhost";
$andmebaas ="KT";
$passwd = "1234";

$yhendus = mysqli_connect ($dbserver, $kasutaja, $passwd, $andmebaas);

if (!$yhendus) {
    die("Viga: " . $yhendus->connect_error);
}
?>