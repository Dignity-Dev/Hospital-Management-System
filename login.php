<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php
include("header.php");
include("library.php");
noAccessIfLoggedIn();
?>
<div class="container">
    <h1>Welcome to Oyo State General Hospital  Official Website</h1>
    <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of common man.</p>
    <p><?php include('slideshow.php'); ?></p>
    <?php
    if (isset($_POST['lemail'])) {
        $i = login($_POST['lemail'], $_POST['lpassword'], "users");
        if ($i == 1) {
            echo '<script type="text/javascript"> window.location = "add_patient.php" </script>';
        }
    } else if (isset($_POST['remail'])) {
        $i = register($_POST['remail'], $_POST['rpassword'], $_POST['rfullname'], "users");
        if ($i == 1) {
            echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
        }
    } else {
        echo "<div class='alert alert-info'>
              <strong>Info!</strong> Login or Register to be able to book your appointment.</div>";
    }
    unset($_POST);
    ?>
    <div class="row">
        <div class="col col-xl-6 col-sm-6 col-lg-offset-3">
            <h2>Login</h2>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input type="email" class="form-control" name="lemail" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="lpassword" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                    <input type="reset" class="btn btn-danger">
                </div>
                <p>click here to register new patient complaint account <a href="register.php">Register now</a></p>

            </form>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>