<?php
$servername = "localhost";
$username = ""; //add o user do banco
$password = "";
$dbname = "crud_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
