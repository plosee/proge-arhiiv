<?php
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'muusikapood_mlaane';
$db_kasutaja = 'mlaane';
$db_salasona = 'mlaane';
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
	die('Ei saa ühendust andmebaasiga'.$yhendus->connect_error);
}
?>