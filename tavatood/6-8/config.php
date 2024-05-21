<?php
$kasutaja = "mlaane";
$dbserver = "localhost";
$andmebaas ="muusikapood";
$passwd = "1234";

$uhendus = mysqli_connect ($dbserver, $kasutaja, $passwd, $andmebaas);

if (!$uhendus) {
    die("viiigaaa: " . $uhendus -> connect_error);
}
?>
