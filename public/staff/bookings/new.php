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
  $date = $_POST['date'] ?? '';
  $time = $_POST['time'] ?? '';
  $people = $_POST['people'] ?? '';

  echo "Form parameters <br />";
  echo "Name: " . $name . "<br />";
  echo "Email: " . $email . "<br />";
  echo "Date: " . $date . "<br />";
  echo "Time: " . $time . "<br />";
  echo "People: " . $people . "<br />";

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
