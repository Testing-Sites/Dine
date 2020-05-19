<?php

function find_all_bookings() {
  global $db;

  $sql = "SELECT * FROM bookings ";
  $sql .= "ORDER BY id ASC";
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

function create_booking($booking) {
  global $db;

  $sql = "INSERT INTO bookings ";
  $sql .= "(name, email, booking_date, booking_time, people) ";
  $sql .= "VALUES (";
  $sql .= "'" . $booking['name']. "', ";
  $sql .= "'" . $booking['email'] . "', ";
  $sql .= "'" . $booking['booking_date'] . "', ";
  $sql .= "'" . $booking['booking_time'] . "', ";
  $sql .= "'" . $booking['people'] . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);

  if ($result) {

    return true;

  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }

}

function delete_booking($id) {
  global $db;

  $sql = "DELETE FROM bookings ";
  $sql .= "WHERE id='" . $id . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

?>
