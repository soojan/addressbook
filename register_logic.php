<html>
<head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="assets/jquery/jquery-3.3.1.min"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min"></script>

<body>
<?php
include 'header.php';
?>

<div class="row col-md-2"></div>
<div class="row col-md-8">

    <?php
    require_once 'database.php';
    $r_name = $_POST["name"];
    $r_email = $_POST["email"];
    $r_phone = $_POST["phone"];
    $r_password1 = $_POST["password1"];
    $r_password2 = $_POST["password2"];
    $r_gender = $_POST["gender"];
    $r_address = $_POST["address"];

    if($r_password1 != $r_password2){
        echo 'Password mismatch.';
        $db = new database();
        echo $db->getUserCount();
    }

    else{
        $db = new database();
        $query = mysqli_query($db->dbconnect(), "SELECT count(*) from users");
        $row = $query->fetch_row();

        //check if same email exist
        $query = mysqli_query($db->dbconnect(), "SELECT count(*) from users where email='".$r_email."'");
        $row = $query->fetch_row();
        if($row[0] < 1){
            $insert = "insert into users (name, email, password, gender, address, phone) values (
			'".$r_name."',	'".$r_email."',	'".md5($r_password1)."',	'".$r_gender."',	'".$r_address."',	".$r_phone.")";
            mysqli_query($db->dbconnect(),$insert);
            echo 'User registered.';
        }
        else{
            echo 'User already exist.';
        }
    }

    ?>
</div>
<div class="row col-md-1" style="background-color: #dddddd"></div>
<div class="row col-md-1"></div>
</body>
</html>



