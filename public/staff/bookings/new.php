<?php

require_once('../../../private/initialize.php');

$name = '';
$email = '';
$date = '';
$time = '';
$people = '';

if(is_post_request()) {

  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $date = $_POST['booking_date'] ?? '';
  $time = $_POST['booking_time'] ?? '';
  $people = $_POST['people'] ?? '';

  $sql = "INSERT INTO bookings ";
  $sql .= "(name, email, booking_date, booking_time, people) ";
  $sql .= "VALUES (";
  $sql .= "'" . $name . "', ";
  $sql .= "'" . $email . "', ";
  $sql .= "'" . $date . "', ";
  $sql .= "'" . $time . "', ";
  $sql .= "'" . $people . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);

  if($result) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/staff/bookings/show.php?id=' . $new_id));
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }

} else {

}

?>

<?php $title = 'Create Booking'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/staff/bookings/index.php'); ?>">&larr; Back to list</a>

  <div class="bookings new">
    <h1>Create Booking</h1>

    <form action="<?php echo url_for('staff/bookings/new.php'); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value=""></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><input type="email" name="email"></dd>
      </dl>
      <dl>
        <dt>Date</dt>
        <dd><input type="date" name="booking_date"></dd>
      </dl>
      <dl>
        <dt>Time</dt>
        <dd><input type="time" name="booking_time"></dd>
      </dl>
      <dl>
        <dt>People</dt>
        <dd>
          <select name="people">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Bookings" />
      </div>

    </form>

  </div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
