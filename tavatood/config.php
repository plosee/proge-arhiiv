<?php
$servername = "localhost"; // andmebaasi serveri nimi (tavaliselt localhost)
$username = "mlaane"; // kasutajanimi
$password = "1234"; // parool
$database = "muusikapood"; // andmebaasi nimi

// Loome ühenduse andmebaasiga
$conn = new mysqli($servername, $username, $password, $database);

// Kontrollime ühendust
if ($conn -> connect_error) {
    die("uhendus paha " . $conn->connect_error);
}
?>
