<?php
/**
 * Created by PhpStorm.
 * User: Soojan
 * Date: 0007 July 7 2018
 * Time: 12:29:15 PM
 */
session_start();
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$email = $_POST["email"];
$landline = $_POST["landline"];
$website = $_POST["website"];
$company = $_POST["company"];
$id = $_SESSION['chosenId'];

include 'database.php';
$db = new database();
$response = $db->UpdateRecord($id,$name,$mobile,$address,$city,$state,$zip,$email,$landline,$website,$company);
if($response == 1)
    echo 'Successfully updated.';
else
    echo 'Please try again.';
