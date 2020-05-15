<?php
require_once('../../../private/initialize.php')

?>

<?php $id = $_GET['id']; ?>

<?php $title = "View"?>
<?php include(SHARED_PATH . '/header.php')?>

<div id="content">
  <a class="back" href="<?php echo url_for('/staff/bookings/index.php')?>">&larr;Back to bookings</a><br />
  <?php echo "ID: " . $id; ?>
</div>

<?php include(SHARED_PATH . '/footer.php')?>
