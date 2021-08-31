<?php
/* DEFAULTS */
// JANGAN LUPA GANTI NAMA DATABASE
$SQL_USER = "root";
$SQL_PASSWORD = "";
$SQL_HOST = "localhost";
$SQL_DATABASE = "YOUR_DATABASE_NAME";

// Cek jika sedang development di laptop sendiri
// agaknya caranya kasar, tapi buat sementara waktu kuliah.
// Kalaupun remote ga pakai composer, aplikasi tetep jalan pake
// asumsi default credential untuk XAMPP / LAMP
// - username: "root"
// - password: ""
//
// Environment variable "MY_LAPTOP" asalnya dari file .conf site ini
if (isset($_SERVER["MY_LAPTOP"])) {
  // Kalau pakai composer pasti ada direktori ./vendor/
  require_once 'vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '../.env');
  $dotenv->load();

  $SQL_USER = $_SERVER["MYSQL_USER"];
  $SQL_PASSWORD = $_SERVER["MYSQL_PASSWORD"];
  $SQL_HOST = "localhost";
  $SQL_DATABASE = "my_personal_website";
}

$dbconn = mysqli_connect($SQL_HOST, $SQL_USER, $SQL_PASSWORD, $SQL_DATABASE);

if (!$dbconn) {
  die("<h1>[ERROR] Cannot connect to MySQL! Please check potential mistyped credential info</h1>");
}
