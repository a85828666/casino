<?php

require_once "dbh.php";
if(!(isset($_POST["name"])&&isset($_POST["pass"])))
{
die('アカウント名とパスワードを入力して');
}else {
	$name=h($_POST['name']);
    $pass=h($_POST['pass']);
    $token=1000;
	$hashedpass=password_hash($pass, PASSWORD_DEFAULT);
}
$sql="select name from user where name like ?";
$stmt=$dbh->prepare($sql);
$stmt->execute(
array(
	$name
		));
		
if($stmt->rowCount()){ 
	die('このアカウント名は存在しているため使用できない');
}else{

$sql="INSERT INTO `user` (`id`, `name`, `password`, `token`)
VALUES (NULL,?,?,?)";

$stmt=$dbh->prepare($sql);
$stmt->execute(
array(
	$name,
	$hashedpass,
	$token,
	));
	echo "成功<br>";
	echo "<a href=
	'rogin.php'>ログイン画面へ</a>";
}
?>