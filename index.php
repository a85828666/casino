<?php
$pass=1;
$kkk=password_hash($pass, PASSWORD_DEFAULT);
var_dump($kkk);
var_dump(password_verify($pass,$kkk));
?>
