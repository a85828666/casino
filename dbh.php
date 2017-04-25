<?php
$dsn = 'mysql:dbname=casino;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';
if($dbh = new PDO($dsn, $user, $password)) {
    echo'Connection sucessed<br>';
} else {
		die('failed');
}
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// XSS対策
function h($s) {
	return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>
