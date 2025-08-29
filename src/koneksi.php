<?php
$host = "localhost";
$user = "root";  // default Laragon/XAMPP
$pass = "";
$db   = "login_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
