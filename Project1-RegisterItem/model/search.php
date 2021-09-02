<?php
function search_database($dbconn, $search_query, $category)
{
  $table_name = "daftar_nama";

  $category = strtolower($category);

  if ($category === "all") {
    $query_string = "SELECT * FROM $table_name
                      WHERE
                      nama LIKE '%$search_query%' OR
                      email LIKE '%$search_query%' OR
                      domisili LIKE '%$search_query%'
                    ";
  } else {
    $query_string = "SELECT * FROM $table_name
                      WHERE
                      $category LIKE '%$search_query%'
                    ";
  }

  $result = mysqli_query($dbconn, $query_string);

  if ($result) {
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
  } else {
    echo "<h1>QUERY ERROR</h1>";
    echo mysqli_error($dbconn);
    return false;
  }
}
