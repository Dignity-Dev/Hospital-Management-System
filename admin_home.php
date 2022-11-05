<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">
<style>
  .sip {
    text-align: center;
    margin: 10px;
  }

  .sip a {
    padding: 10px;
    border: 2px solid green;
    text-decoration: none;
    color: white;
    background-color: green;
    text-align: center;
  }

  .sip a:hover {
    padding: 10px;
    border: 2px solid green;
    text-decoration: none;
    color: green;
    background-color: white;
    text-align: center;
  }
</style>
<?php
include("header.php");
include("library.php");

noAccessForClerk();
noAccessForDoctor();
noAccessForNormal();

noAccessIfNotLoggedIn();

?>
<div class="container">
  <h1 class="text-center">Admininistrator Homepage: Oyo State General Hospital </h1>
  <br>
  <br>
  <div class="sip">
    <a href="admin_home.php">Dashboard</a>
    <a href="doctor.php">Doctors Info</a>
    <a href="staff.php">Staff Info</a>
  </div>
  <br>
  <p><?php include('slideshow.php'); ?></p>
  <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of common man.</p>
  <?php include("footer.php"); ?>