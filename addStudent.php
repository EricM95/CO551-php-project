<!DOCTYPE html>
<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");
echo template("templates/partials/nav.php");


?>
<div class="container">
    <form action="actionAddStudent.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstname">First Name :</label>
                <input type="text" class="form-control" name="firstname" placeholder="First name">
            </div>

            <div class="form-group col-md-6">
                <label for="lastname">Last Name :</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last name">
            </div>
        </div>

        <div class="form-group">
            <label for="house">Address :</label>
            <input type="text" class="form-control" name="house" placeholder="1234 Main St">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="town">Town :</label>
                <input type="text" class="form-control" name="town">
            </div>

            <div class="form-group col-md-6">
                <label for="county">County :</label>
                <input type="text" class="form-control" name="county">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="country">Country :</label>
                <input type="text" class="form-control" name="country">
            </div>

            <div class="form-group col-md-6">
                <label for="postcode">Postcode :</label>
                <input type="text" class="form-control" name="postcode">
            </div>
        </div>
        <div class=form-group>
            <label for="dob">Date of Birth :</label>
            <input type="date" class="form-control" name="dob" id="dob">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword1">Password :</label>
                <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword2">Confirm Password :</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Confirm password">
            </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
echo template("templates/partials/footer.php");
?>