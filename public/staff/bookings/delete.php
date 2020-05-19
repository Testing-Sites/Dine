<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/bookings/index.php'));
}

$id = $_GET['id'];

if(is_post_request()) {

  $result = delete_booking($id);
  redirect_to(url_for('/staff/bookings/index.php'));

} else {

  $booking = find_booking_by_id($id);

}



?>

<?php $title = 'Delete' ?>
<?php include(SHARED_PATH . '/header.php') ?>

<div id="content">

  <a href="<?php echo url_for('/staff/bookings/index.php'); ?>">&larr; Back to list</a>

  <div class="delete booking">
    <h1>Delete Bookig</h1>
    <p>Are you sure you want to delete this subject?</p>
    <p class="item"><?php echo h($booking['name']); ?></p>

    <form action="<?php echo url_for('/staff/bookings/delete.php?id=' . h(u($booking['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Subject" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php')?>
