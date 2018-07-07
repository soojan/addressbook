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
<?php
include 'header.php';
?>
<body>

<div class="row col-md-2"></div>
<div class="row col-md-8">
    <div class="center-block">
<form action="register_logic.php" method="post">

Name: <input type="text" name="name" required style="margin: 5px;"><br>
E-mail: <input type="text" name="email" required style="margin: 5px;"><br>
Password: <input type="password" name="password1" required style="margin: 5px;"><br>
Confirm Password: <input type="password" name="password2" required style="margin: 5px;"><br>
Phone: <input type="text" name="phone" required style="margin: 5px;"><br>
Address: <textarea name="address" rows="5" cols="40"required style="margin: 5px;"></textarea><br>
Gender:
<input type="radio" name="gender" required style="margin: 5px;"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
    <br>
<button type="submit" style="margin: 5px;">Register</button>

</form>
    </div>
</div>
<div class="row col-md-2"></div>
</body>
</html>