<?php
require_once "dbconn.php";

function search_database($search_query, $category)
{
  global $dbconn;
  $table_name = "daftar_nama";

  $category = strtolower($category);


  $query_string = ($category === "all") ?
    "SELECT * FROM $table_name
       WHERE
        nama LIKE '%$search_query%' OR
        email LIKE '%$search_query%' OR
        domisili LIKE '%$search_query%'
    " :
    "SELECT * FROM $table_name 
       WHERE
        $category LIKE '%$search_query%'
    ";

  $result = mysqli_query($dbconn, $query_string);

  if ($result) {
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
  } else {
    echo "<h1>DATABASE ERROR</h1>";
    echo mysqli_error($dbconn);
    return false;
  }
}
