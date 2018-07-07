<?php
require_once 'database.php';

$r_name = $_POST["inputName"];
$r_mobile = $_POST["inputMobile"];
$r_address = $_POST["inputAddress"];
$r_city = $_POST["inputCity"];
$r_state = $_POST["inputState"];
$r_zip = $_POST["inputZip"];
$r_email = $_POST["inputEmail"];
$r_landline = $_POST["inputLandline"];
$r_website = $_POST["inputWebsite"];
$r_company = $_POST["inputCompany"];

$db = new database();
$response = $db->insertNewRecord($r_name,$r_mobile,$r_address,$r_city,$r_state,$r_zip,$r_email,$r_landline,$r_website,$r_company);
if($response == 1)
    header('Location: '.'addcontact.php?r=1');
else
    header('Location: '.'addcontact.php?r=0');
?>