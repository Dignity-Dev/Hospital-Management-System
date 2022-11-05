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
    <h1 align=center>Doctor Information: Oyo State General Hospital </h1>
    <br>
    <br>
    <div class="sip">
        <a href="admin_home.php">Dashboard</a>
        <a href="doctor.php">Doctors Info</a>
        <a href="staff.php">Staff Info</a>
    </div>
    <?php
    if (isset($_POST['demail'])) {
        $i = register($_POST['demail'], $_POST['dpassword'], $_POST['dfullname'], $_POST['dSpecialist'], "doctors");
    }
    if (isset($_POST['aemail'])) {
        $i = register($_POST['aemail'], $_POST['apassword'], $_POST['afullname'], 'non', "clerks");
    }
    if (isset($_POST['DrDelEmail'])) {
        $i = delete("doctors", $_POST['DrDelEmail']);
    }
    if (isset($_POST['ClDelEmail'])) {
        $i = delete("clerks", $_POST['ClDelEmail']);
    }

    ?>

    <div class="col col-xl-6 col-sm-6 col-lg-offset-3 " id="register1">
        <form method="post" action="doctor.php">
            <h2>Doctor Registration</h2>
            <div class="form-group">
                <label for="usr">Full Name:</label>
                <input type="text" class="form-control" name="dfullname" required>
            </div>

            <div class="form-group">
                <label for="usr">Email:</label>
                <input type="email" class="form-control" name="demail" required>
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="dpassword" required>
            </div>

            <div class="form-group">
                <label for="pwd">Speciality:</label>
                <select class='form-control' required value=1 name="dSpecialist">
                    <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
                    <option value="Allergist" class="option">Allergist - Allergy Expert</option>
                    <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
                    <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
                    <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
                    <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
                    <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register">
                <input type="reset" name="" class="btn btn-danger"></button>
            </div>
        </form>


        <hr>
        <form method="post" action="admin_home.php">

            <div class="form-group">
                <h2>Delete Doctor</h2>
                <select class='form-control' required value=1 name="DrDelEmail">

                    <?php
                    $result = getListOfEmails('doctors');

                    if (is_bool($result)) {
                        echo "No doctors found in database";
                    } else {
                        while ($row = $result->fetch_array()) {
                            echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                        }
                        echo '&emsp;';
                    }

                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Delete">
            </div>
        </form>
    </div>
    </form>
</div>
</div>


</div>
<div class="col col-xl-6 col-sm-6 " id="register1">
</div>
<div class="col col-xl-6 col-sm-6 " id="register1">
</div>
<?php include("footer.php"); ?>