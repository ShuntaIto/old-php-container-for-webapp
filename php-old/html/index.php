<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>test app</title>
</head>
<body >
<p>123456でMySQLからテストデータをSELECTします</p>
<form method="post" action="dbtest.php">
<input type="text" name="id">
<input type="submit" value="送信ボタン">
</form>

<?php phpinfo(); ?>

</body>
</html>