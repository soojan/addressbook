<html>
<head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="assets/jquery/jquery-3.3.1.min"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min"></script>
</head>
<body style="color: #2b669a;">
<?php
/**
 * Created by PhpStorm.
 * User: Soojan
 * Date: 0006 July 6 2018
 * Time: 8:32:46 AM
 */
session_start();
if (!isset($_SESSION['email']))
    header('Location: index.php');
include('header.php');

if(!empty($_GET['r'])){

}
if(!empty($_GET['r']) && $_GET['r']==0){
	echo '<script language="javascript">';
	echo 'alert("Cannot add contact. Try again.")';
	echo '</script>';
}
if(!empty($_GET['r']) && $_GET['r']==1){
    echo '<script language="javascript">';
    echo 'alert("Contact successfully added.")';
    echo '</script>';
}


?>

<div class="row col-md-2"></div>
<div class="row col-md-8" style="background-color: #dddddd">
    Welcome <?php echo $_SESSION['email']; ?>
</div>
<div class="row col-md-1" style="background-color: #dddddd"><?php echo date('Y-m-d');?></div>
<div class="row col-md-1"> </div>

    <div class="row col-md-2" ></div>
    <div class="row col-md-5" >
        <a href="dashboard.php">Dashboard</a>
    </div>
    <div class="row col-md-1" style="text-align: left;"><a href="contact.php"> My Contacts</a></div>
    <div class="row col-md-1" style="text-align: right;">
        <a href="profile.php">My Profile</a>
    </div>
    <div class="row col-md-1" style="text-align: right;">
        <a href="logout.php">Logout</a>
    </div>
    <div class="row col-md-2" style="text-align: center;"><a href="about.php">About</a></div>
<!-------->

<div class="row col-md-2"></div>
<div align="center" style="border: #5e5e5e 1px solid; padding: 25px; " class="row col-md-8">
    <h3 style="text-align: left"> Add new contact:</h3>
    <form action="addcontact_logic.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="inputName" placeholder="Good name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputMobile">Mobile</label>
                <input type="text" class="form-control" name="inputMobile" placeholder="Mobile number" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address Tole/Ward</label>
            <input type="text" class="form-control" name="inputAddress" placeholder="Nadipur-3" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="inputCity" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select name="inputState" class="form-control" required>
                    <option selected>Choose...</option>
                    <option>Gandaki</option>
                    <option>Bagmati</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" name="inputZip" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" name="inputEmail" placeholder="foo@bar.com" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputLandline">Landline</label>
                <input type="text" class="form-control" name="inputLandline" placeholder="Landline number" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputWebsite">Website</label>
                <input type="text" class="form-control" name="inputWebsite" placeholder="www.google.com" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputCompany">Organization Name</label>
                <input type="text" class="form-control" name="inputCompany" placeholder="Google Inc." required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</div>
<div class="row col-md-2"></div>
</body>
</html>
