<?php
require './class.RandomPassword.php';
$RP = new RandomPassword();
$password = $RP->getPassword(14);
echo $password;
?>
