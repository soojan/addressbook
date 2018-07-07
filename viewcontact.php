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
<div class="row col-md-2" style="text-align: center;">About</div>

<div class="row col-md-2" ></div>
<div align="center" style="border: #5e5e5e 1px solid; margin: 5px;" class="row col-md-9">
    <h2><b>My Contacts:</b> </h2><br><br>
    <table class="table table-striped">
        <div class="table responsive">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Email</th>
                <th>Landline</th>
                <th>Website</th>
                <th>Company</th>
            </tr>
            </thead>
            <tbody>

<?php
$db = new database();
$result = $db->getAllContacts();

if (count($result) > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td scope="row">' . $row["id"]. '</td>
                  <td>' . $row["name"] .'</td>
                  <td> '.$row["mobile"] .'</td>
                  <td> '.$row["address"] .'</td>
                  <td> '.$row["city"] .'</td>
                  <td> '.$row["state"] .'</td>
                  <td> '.$row["zip"] .'</td>
                  <td> '.$row["email"] .'</td>
                  <td> '.$row["landline"] .'</td>
                  <td> '.$row["website"] .'</td>
                  <td> '.$row["company"] .'</td>' .
            '
                </tr>';
    }
} else {
    echo "0 results";
}
?>
            </tbody>
        </div>
    </table>


</div>
<div class="row col-md-1"></div>
</body>
</html>
