<?php
require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$dotenv->load();

$host = "localhost";
$user = $_SERVER["DOTENV_MYSQL_USER"];
$password = $_SERVER["DOTENV_MYSQL_PASSWORD"];
$database = "project_1";

$dbconn = mysqli_connect($host, $user, $password, $database);
