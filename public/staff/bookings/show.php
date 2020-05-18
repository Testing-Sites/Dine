<?php
require_once('../../../private/initialize.php')

?>

<?php

$id = $_GET['id'] ?? '1';

$sql = "SELECT * FROM bookings ";
$sql .= "WHERE id='" . $id . "'";
$results = mysqli_query($db, $sql);
$booking = mysqli_fetch_assoc($results);

?>

<?php $title = "View"?>
<?php include(SHARED_PATH . '/header.php')?>

<div id="content">
  <a class="back" href="<?php echo url_for('/staff/bookings/index.php')?>">&larr;Back to bookings</a><br />

  <div class="subject show">

    <h1>Booking: <?php echo h($booking['name']); ?></h1>

      <div class="attributes">
        <dl>
          <dt>Name</dt>
          <dd><?php echo h($booking['name'])?></dd>
        </dl>
        <dl>
          <dt>Email</dt>
          <dd><?php echo h($booking['email'])?></dd>
        </dl>
        <dl>
          <dt>Date</dt>
          <dd><?php echo h($booking['booking_date'])?></dd>
        </dl>
        <dl>
          <dt>Time</dt>
          <dd><?php echo h($booking['booking_time'])?></dd>
        </dl>
        <dl>
          <dt>People</dt>
          <dd><?php echo h($booking['people'])?></dd>
        </dl>
      </div>

  </div>
</div>

<?php include(SHARED_PATH . '/footer.php')?>
