<?php

function find_all_bookings() {
  global $db;

  $sql = "SELECT * FROM bookings ";
  $sql .= "ORDER BY position ASC";
  $result = mysqli_query($db, $sql);

  return $result;
}

function find_booking_by_id($id) {
  global $db;

  $sql = "SELECT * FROM bookings ";
  $sql .= "WHERE id='" . $id . "'";
  $results = mysqli_query($db, $sql);
  confirm_result_set($results);
  $booking = mysqli_fetch_assoc($results);

  return $booking;
}

?>
