<html>
<head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="assets/jquery/jquery-3.3.1.min"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min"></script>
</head>
<body>
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
require_once 'database.php';

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
<div class="row col-md-2" style="text-align: center;"><a href="about.php"> About</a></div>

<div class="row col-md-2"></div>
<div class="row col-md-6">
    <h2>Benefits of Address Book</h2>
    <p class="text-success" style="font-size: large">
        Store contacts in one place ?Being able to store all of your personal or business contacts in one easy to get to place, will help you always be able to find the information you need easily. It will also help you stay organized, which is important for anyone, but especially when you run a business.
    </p>
    <p class="text-success" style="font-size: large">
        Add other important information ?There are some programs available that will allow you to add not only text, but also pictures, attachments, tables and even URLs for a specific contact. This will let you stay really organized and keep every important thing for each contact where it needs to be so you can find it easily.
    </p>
    <h3 class="text-info">Address Book is a professional, elegant and handy contact and customer information management software program.</h3>
</div>
<div class="row col-md-4">
    <img src="assets/img/banner.jpg" width="450"/>
</div>

</body>
</html>
