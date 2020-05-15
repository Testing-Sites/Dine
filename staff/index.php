<?php require_once('../private/initialize.php'); ?>

<?php $title = 'Home'; ?>
<?php include('../private/shared/header.php'); ?>

    <div id="content">
      <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
          <li><a href="<?php echo url_for('/staff/bookings/index.php'); ?>">Bookings</a></li>
        </ul>
      </div>

    </div>

<?php include('../private/shared/footer.php'); ?>
