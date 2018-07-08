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
    echo 'alert("Cannot update contact. Try again.")';
    echo '</script>';
}
if(!empty($_GET['r']) && $_GET['r']==1){
    echo '<script language="javascript">';
    echo 'alert("Contact successfully updated.")';
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="row col-md-2"></div>
<div align="center" style="border: #5e5e5e 1px solid; padding: 25px; " class="row col-md-8">
    <h3 style="text-align: left"> Update contact with ID:</h3>
    <form action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-4">
                <select name="inputIds" class="form-control" id="ids" required>
                    <option selected id="id">Choose...</option>
                    <?php
                    require_once 'database.php';
                    $db = new database();
                    $result = $db->getAllIds();
                    if (count($result) > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option>$row[id]</option>";
                        }
                    }
                    else{
                        echo '0 records.';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group col-md-2">
            <input type="submit" value="Edit" class="btn btn-primary" id="edit" name="editbtn"></input>
        </div>
    </form>

    <?php
    if (isset($_POST["editbtn"]))
    {
        $selected=$_REQUEST['inputIds'];
        $_SESSION['chosenId'] = $selected;
        $tuple = $db->getContact($selected);
        $_SESSION['editid'] = $tuple;
        ?>
        <script>
            var x = document.getElementById("updateform");
            x.style.display = "block";
            </script>
    <?php
    }
    else{
        ?>
        <script>
            var x = document.getElementById("updateform");
            x.style.display = "none";
        </script>
    <?php
    }
    ?>

<div id="updateform" >
    <div align="center" style="border: #5e5e5e 1px solid; padding: 25px; " class="row col-md-12">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="name" name="inputName" placeholder="Good name" required value="<?php if(!empty($_SESSION['editid'])) { $tuple = $_SESSION['editid']; echo $tuple[1];}  ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputMobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="inputMobile" placeholder="Mobile number" required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[2]; } ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address Tole/Ward</label>
                <input type="text" class="form-control" id="address" name="inputAddress" placeholder="Nadipur-3" required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[3]; } ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="city" name="inputCity" required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[4];}  ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select name="inputState" class="form-control" id="state" required>
                        <option selected>Choose...</option>
                        <option>Gandaki</option>
                        <option>Bagmati</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="inputZip" required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[6]; } ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" id="email" name="inputEmail" placeholder="foo@bar.com" required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[7]; } ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLandline">Landline</label>
                    <input type="text" class="form-control" id="landline" name="inputLandline" placeholder="Landline number" required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[8];}  ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputWebsite">Website</label>
                    <input type="text" class="form-control" id="website" name="inputWebsite" placeholder="www.google.com" required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[9]; } ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCompany">Organization Name</label>
                    <input type="text" class="form-control" id="company" name="inputCompany" placeholder="Google Inc." required value="<?php if(!empty($_SESSION['editid'])) {$tuple = $_SESSION['editid']; echo $tuple[10]; } ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="updatecontact">Update</button>

        <script>
            $(document).ready(function(){
                $("#updatecontact").click(function(){
                    var name=$("#name").val();
                    var mobile=$("#mobile").val();
                    var address=$("#address").val();
                    var city=$("#city").val();
                    var state=$("#state").val();
                    var zip=$("#zip").val();
                    var email=$("#email").val();
                    var landline=$("#landline").val();
                    var website=$("#website").val();
                    var company=$("#company").val();
                    $.ajax({
                        url:'updatecontact_logic.php',
                        method:'POST',
                        data:{
                            name:name,
                            mobile:mobile,
                            address:address,
                            city:city,
                            state:state,
                            zip:zip,
                            email:email,
                            landline:landline,
                            website:website,
                            company:company
                        },
                        success:function(response){
                            alert(response);
                            $('#updateform').html("");
                            /*if(response == '1'){
                                alert('Successfully updated.');
                                header('Location: '.'updatecontact.php?r=1');
                            }
                            else
                            {
                                alert('Please try again.');
                                header('Location: '.'updatecontact.php?r=0');
                            }*/
                        }
                    });
                });
            });
        </script>

    </div>
</div>

</div>
<div class="row col-md-2"></div>
</body>
</html>
