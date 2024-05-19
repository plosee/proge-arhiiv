<?php
$kasutaja = "mlaane";
$dbserver = "localhost";
$andmebaas ="muusikapood";
$passwd = "1234";

$uhendus = mysqli_connect ($dbserver, $kasutaja, $passwd, $andmebaas);

if (!$uhendus) {
    die("Viga: " . $uhendus -> connect_error);
}
?>