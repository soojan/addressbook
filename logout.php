<?php
/**
 * Created by PhpStorm.
 * User: Soojan
 * Date: 0006 July 6 2018
 * Time: 2:33:34 PM
 */
session_start();
session_destroy();
header('Location: index.php');
exit;
?>