<?php
$servername = "helbert.info";
$username = "helbert";
$password = "helbert123";
$dbname = "proyectophp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
