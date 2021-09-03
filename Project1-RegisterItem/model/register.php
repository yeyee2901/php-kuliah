<?php
require_once "dbconn.php";

function register($post)
{
  global $dbconn;
  $table_name = "daftar_nama";

  // To escape pesky html tags
  $email = htmlspecialchars($post["email"]);
  $nama = htmlspecialchars($post["nama"]);
  $domisili = htmlspecialchars($post["domisili"]);

  $query_string = "
    INSERT INTO $table_name (email, nama, domisili) 
    VALUES (
      '$email',
      '$nama',
      '$domisili'
  )";

  mysqli_query($dbconn, $query_string);

  if (mysqli_affected_rows($dbconn) > 0) {
    return true;
  } else {
    return false;
  }
}
