<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energia";

$polaczenie = new mysqli($servername, $username, $password, $dbname, 3306);

if ($polaczenie->connect_error) {
    die("ERROR POLACZENIA: " . $polaczenie->connect_error);
}



