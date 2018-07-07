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
    My Profile
</div>
<div class="row col-md-1" style="text-align: right;">
    <a href="logout.php">Logout</a>
</div>
<div class="row col-md-2" style="text-align: center;"><a href="about.php">About</a></div>

<div class="row col-md-2" ></div>
<div align="center" style="border: #5e5e5e 1px solid; margin: 5px;" class="row col-md-8">
    <h2><b>Profile Details:</b> </h2><br><br>
    <?php
    require_once 'database.php';
    $db = new database();
    $tuple = $db->getProfileDetail($_SESSION['email']);
    ?>
    <div class="row">
        <div class="col-sm-8" style="text-align: left;font-size: medium">
            Name: <b><?php echo $tuple[1];  ?></b><br><br>
            Email: <b><?php echo $tuple[2];  ?></b><br><br>
            Phone: <b><?php echo $tuple[4];  ?></b><br><br>
            Address: <b><?php echo $tuple[5];  ?></b><br><br>
            Gender: <b><?php echo $tuple[6];  ?></b><br><br>
        </div>
        <div class="col-sm-4">
            <?php
            if($tuple[6]=='m')
                $gend='m';
            else if($tuple[6]=='f')
                $gend='f';
            else
                $gend='o';
            ?>
            <img src="assets/img/<?php echo $gend?>.png" width="100">
        </div>
    </div>


</div>
</body>
</html>
