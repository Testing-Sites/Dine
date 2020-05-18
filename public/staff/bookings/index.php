<?php require_once('../../../private/initialize.php') ?>

<?php

  $bookings_set = find_all_bookings();

?>

<?php $title = 'bookings'?>
<?php include(SHARED_PATH .'/header.php')?>

<div id="content">
  <div class="subject listing">
    <h1>Bookings</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/bookings/new.php') ?>">Create New Booking</a>
    </div>

    <table class="list">

      <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Time</th>
        <th>People</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php while($booking = mysqli_fetch_assoc($bookings_set)) {?>

        <tr>
          <td><?php echo h($booking['id']); ?></td>
          <td><?php echo h($booking['position']); ?></td>
          <td><?php echo h($booking['name']); ?></td>
          <td><?php echo h($booking['email']); ?></td>
          <td><?php echo h($booking['booking_date']); ?></td>
          <td><?php echo h($booking['booking_time']); ?></td>
          <td><?php echo h($booking['people']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/bookings/show.php?id=' . h(u($booking['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/bookings/edit.php?id=' . h(u($booking['id']))); ?>">Edit</a></td>
          <td><a class="action" href="#">Delete</a></td>
        </tr>

      <?php } ?>
    </table>
  </div>
</div>

<?php include(SHARED_PATH .'/footer.php')?>
