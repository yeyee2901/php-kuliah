<?php 
require "dbconn.php";

function select_all($target_table)
{
  global $dbconn;
  $query_str = "SELECT * FROM $target_table";
  $result = mysqli_query($dbconn, $query_str);


  return mysqli_fetch_assoc($result);
}
