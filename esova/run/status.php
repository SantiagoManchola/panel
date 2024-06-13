<?php 
require('../../machinne/include/setings.php');
$id = $_COOKIE['id'];
$sts = status($id);
echo $sts;
?>