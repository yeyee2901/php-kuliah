<?php
require "dbconn.php";

function insert_new_user($username, $password)
{
  global $dbconn;

  $username = $username;
  $password = password_hash($password, PASSWORD_DEFAULT);

  // insert to database
  $query = "INSERT INTO daftar_user (username, password) 
                     VALUES ('$username', '$password')";

  mysqli_query($dbconn, $query);
  if (mysqli_affected_rows($dbconn) > 0) {
    return true;
  } else {
    return false;
  }
}
