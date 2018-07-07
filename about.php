<html>
<head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="assets/jquery/jquery-3.3.1.min"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min"></script>
</head>
<body style="color: #2b669a">
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
<div class="row col-md-1" style="text-align: left;"><a href="contact.php"> My Contacts</a></div>
<div class="row col-md-1" style="text-align: right;">
    <a href="profile.php"> My Profile</a>
</div>
<div class="row col-md-1" style="text-align: right;">
    <a href="logout.php">Logout</a>
</div>
<div class="row col-md-2" style="text-align: center;">About</div>

<div class="row col-md-2" ></div>
<div align="center" style="border: #5e5e5e 1px solid; margin: 5px;" class="row col-md-8">
    <h2><b>About Developer:</b> </h2><br><br>
    <div class="row">
        <div class="col-sm-8" style="text-align: left;font-size: medium">
            Name: <b>Sujan Tamrakar  </b><br><br>
            Email: <b>tamrakarsujan061@gmail.com</b><br><br>
            Roll number: <b>13</b><br><br>
            Registration number: <b>7</b><br><br>
            Address: <b>Nadipur, Pokhara, Kaski</b><br><br>
            Course: <b>Web Engineering - First Semester</b><br><br>
            Batch: <b>2018</b><br><br>
            Level: <b>Masters</b><br><br>
            Faculty: <b>Science & Technology</b><br><br>
            Program: <b>Information System Engineering</b><br><br>
            University: <b>Pokhara University</b><br><br>
        </div>
        <div class="col-sm-4">
            <img src="assets/img/about.png" width="100">
        </div>
    </div>


</div>
</body>
</html>
