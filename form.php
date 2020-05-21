<?php
require_once('private/initialize.php');
?>

<?php $title = 'Booking'; ?>
<?php include(SHARED_PATH . '/booking_header.php'); ?>

  <header>
    <div class="background">
      <img  class="logo" src="img/logo.png" alt="logo for dine, font lowercase, bold, white">
      <h1>Reservations</h1>
      <p>We can’t wait to host you. If you have any special requirements please feel free to call on the phone number below. We’ll be happy to accommodate you.</p>
    </div>
  </header>

  <div class="container">

    <form class="form" action="<?php echo ('public/staff/bookings/new.php'); ?>" method="post">
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

  </body>
</html>
