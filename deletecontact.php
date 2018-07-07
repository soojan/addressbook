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
<div class="row col-md-1" style="text-align: left;"><a href="contact.php"> My Contacts</a></div>
<div class="row col-md-1" style="text-align: right;">
    <a href="profile.php">My Profile</a>
</div>
<div class="row col-md-1" style="text-align: right;">
    <a href="logout.php">Logout</a>
</div>
<div class="row col-md-2" style="text-align: center;"><a href="about.php">About</a></div>
<!-------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="row col-md-2"></div>
<div align="center" style="border: #5e5e5e 1px solid; padding: 25px; " class="row col-md-8">
    <h3 style="text-align: left"> Delete contact with ID:</h3>
    <form action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="id" placeholder="Contact id" required>
            </div>
        </div>
        <div class="form-group col-md-2">
            <input type="submit" value="Delete" class="btn btn-danger" id="delete" name="deletebtn"></input>
        </div>
    </form>

    <?php
    if (isset($_POST["deletebtn"]))
    {
        require 'database.php';
        $db = new Database();
        $selected=$_REQUEST['id'];
        $tuple = $db->deleteContact($selected);
        $_SESSION['deleteResponse']=$tuple;
        ?><script>alert('<?php echo $_SESSION['deleteResponse']; ?>');</script><?php
    }
    ?>

</div>
<div class="row col-md-2"></div>
</body>
</html>
