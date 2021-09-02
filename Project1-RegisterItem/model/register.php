<?php
require "../dbconn.php";

// to send success state
session_start();

$table_name = "daftar_nama";
$email = $_POST["email"];
$nama = $_POST["nama"];
$domisili = $_POST["domisili"];

$query_string = "
INSERT INTO $table_name (email, nama, domisili) 
VALUES (
  '$email',
  '$nama',
  '$domisili'
)
";

mysqli_query($dbconn, $query_string);

if (mysqli_affected_rows($dbconn) > 0) {
  $_SESSION["register_status"] = true;
} else {
  $_SESSION["register_status"] = false;
}

// Redirect
header("Location: ../view/register.php");
