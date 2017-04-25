
<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<title>登録</title>
</head>
<body>
    
<h1>新規会員登録</h1>
<form action="confirm.php" method="post" target="fish">
<input required type="text"name="name">アカウント名<br>
<input required type="text"name="pass">パスワード<br>
<input type="submit" value="登録"/>
</form>
<h1>ログイン</h1>
<form action="rogin.php" method="post" target="fish">
<input required type="text"name="name">アカウント名<br>
<input required type="text"name="pass">パスワード<br>
<input type="submit" value="確認"/>
</form>    
    
    
<iframe src="start.php" name="fish"></iframe>
    <br><a href='rogin.php'>すでにアカウント持ち</a>