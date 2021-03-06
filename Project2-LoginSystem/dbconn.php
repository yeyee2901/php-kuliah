<?php
require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$dotenv->load();

$host = "localhost";
$user = $_SERVER["DOTENV_MYSQL_USER"];
$password = $_SERVER["DOTENV_MYSQL_PASSWORD"];
$database = "project_2";

$dbconn = mysqli_connect($host, $user, $password, $database);

if (!$dbconn) {
  echo "<h1>ERROR: database error!</h1>";
  die;
}
