<?php

function find_all_bookings() {
  global $db;

  $sql = "SELECT * FROM bookings ";
  $sql .= "ORDER BY position ASC";
  $result = mysqli_query($db, $sql);

  return $result;
}

?>
