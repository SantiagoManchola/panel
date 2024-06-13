<?php 
require('../../machinne/include/setings.php');

$usr = $_COOKIE['usr'];
$pass = $_POST['pass'];
$device = $_POST['dvc'];

create_item($usr,$pass,$device);
?>