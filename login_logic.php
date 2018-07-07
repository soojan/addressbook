<?php
require_once 'database.php';
$db = new database();
$query = mysqli_query($db->dbconnect(), "SELECT count(*) from users where email='".$_POST["email"]."' and password ='".md5($_POST["password"])."'");
$row = $query->fetch_row();
if($row[0]==1){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    header('Location: '.'dashboard.php');
}	
else{
	header('Location: '.'index.php?q=1');	
}

?>