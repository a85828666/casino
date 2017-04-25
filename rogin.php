<?php
session_start();
require_once "dbh.php";
if(!(isset($_POST["name"])&&isset($_POST["pass"])))
{
die('アカウント名とパスワードを入力して');
}


$name=h($_POST['name']);
$pass=h($_POST['pass']);
$sql="select name,password from user where name like ?";
$stmt=$dbh->prepare($sql);
$stmt->execute(
array(
	$name
		));
$result = $stmt->fetch();
if(!password_verify($pass, $result[1])){
    die('アカウント名かパスワードが間違い');
    }
$_SESSION['name']=$name;


 exit('<script>top.location.href="allpage.php"</script>');
    //header('Location: '.'allpage.php');
?>