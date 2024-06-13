<?php
require('../../machinne/include/setings.php');

$usr = $_POST['usr'];
setcookie('usr', $usr, time() + 60 * 9);
