<?php
  if(!isset($title)) {$title = 'Dine';}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bookings - <?php echo $title ?></title>
    <link rel="stylesheet"  media="all" href="<?php echo url_for('/../css/styles_php.css'); ?>">
  </head>
  <body>
    <header>
      <h1>Dine Restaurant - Bookings</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
      </ul>
    </navigation>
