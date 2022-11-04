<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Oyo State General Hospital
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a class="navbar-brand">🌅 Oyo State General Hospital</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Oyo State General Hospital , Owode Oyo Oyo, Oyo State.</a>
              </li>
              <li class="nav-item">
                <a class="" href="tel:+917709473553">Ambulance Number: +2348176543456</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
