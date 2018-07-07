<html>
<head>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="assets/jquery/jquery-3.3.1.min"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style type="text/css">
        .center-block {
            width:500px;
            padding:10px;
            color:#ec8007;
            text-align: center;
            font-size: large;
        }
    </style>
</head>
<body>
<?php
if(!empty($_GET['q']) && $_GET['q']==1){
	echo '<script language="javascript">';
	echo 'alert("Wrong credentials. Please try again.")';
	echo '</script>';
}
include 'header.php';
?>
	<div class="center-block">
		<form action="login_logic.php" method="post">
		    Email: <input type="text" name="email" required style="margin: 15px"><br>
		    Password: <input type="password" name="password" required style="margin: 15px"><br>
		    <button type="submit">Sign in</button><br>
		    <input type="button" value="Register New Account" onclick="window.location.href='register.php'" style="margin: 15px"/>
		</form>
	</div>
	<div class="col-md-6">

	</div>
</body>
</html>