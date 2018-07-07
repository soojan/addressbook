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
    <div class="row col-md-1" style="text-align: left;">My Contacts</div>
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
    <div class="row col-lg-6" style="margin-bottom: 5px">
        <a href="addcontact"><img src="assets/img/addcontact.jpg" width="150" > <br><b>  Add Contact</b></a>
    </div>
    <div class="row col-lg-6" style="margin-bottom: 5px">
        <a href="updatecontact"><img src="assets/img/edit.png" width="150" ><br><b> Update Contact</b></a>
    </div>
    <div class="row col-lg-6" style="margin-top: 35px;">
        <a href="viewcontact"><img src="assets/img/list.png" width="150" ><br><b> View Contacts</b></a>
    </div>
    <div class="row col-lg-6" style="margin-top: 55px">
        <a href="deletecontact"><img src="assets/img/delete.jpg" width="150" ><br><b> Delete Contact</b></a>
    </div>
</div>
<div class="row col-md-2"></div>
</body>
</html>
