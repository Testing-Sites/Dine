<?php require_once('../../../private/initialize.php') ?>

<?php
  $bookings = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'name' => 'Jamie', 'email' => 'james.phelps1995@live.com', 'date' => '05/10/2020', 'time' => '19:30', 'people' => '4'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'name' => 'Amelia', 'email' => 'amelia.butler@gmail.com', 'date' => '17/10/2020', 'time' => '20:30', 'people' => '2'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'name' => 'Tom', 'email' => 'tomyboiii@gmail.co.uk', 'date' => '18/12/2020', 'time' => '13:45', 'people' => '6'],
  ];
?>

<?php $title = 'bookings'?>
<?php include(SHARED_PATH .'/header.php')?>

<div id="content">
  <div class="subject listing">
    <h1>Bookings</h1>

    <div class="actions">
      <a class="action "href="#">Create New Booking</a>
    </div>

    <table class="list">

      <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Time</th>
        <th>People</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($bookings as $booking) {?>

        <tr>
          <td><?php echo $booking['id']; ?></td>
          <td><?php echo $booking['position']; ?></td>
          <td><?php echo $booking['visible'] == 1 ? 'true' : 'false'; ?></td>
          <td><?php echo $booking['name']; ?></td>
          <td><?php echo $booking['email']; ?></td>
          <td><?php echo $booking['date']; ?></td>
          <td><?php echo $booking['time']; ?></td>
          <td><?php echo $booking['people']; ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/bookings/show.php?id=' . h($booking['id'])); ?>">View</a></td>
          <td><a class="action" href="#">Edit</a></td>
          <td><a class="action" href="#">Delete</a></td>
        </tr>

      <?php } ?>
    </table>
  </div>
</div>
