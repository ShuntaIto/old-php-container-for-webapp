<?php
$dsn = 'mysql:host=<mysql>.mysql.database.azure.com;port=3306;dbname=php';
$username = 'mysqladmin';
$password = '<password>';
$id = (int)$_POST['id'];
try{
	$pdo = new PDO($dsn,$username,$password);
	$sql = "select * from sample where id = :id";

	$sqlstatement = $pdo->prepare($sql);
	$sqlstatement -> bindParam(":id",$id);
	$sqlstatement -> execute();
	
	$rec = $sqlstatement->fetch(PDO::FETCH_ASSOC);
}catch (PDOException $e) {
	exit(mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win'));   
}
function escape1($str)
{
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>mysql</title>
</head>
<body >

<?php foreach ($rec as $a):?>
	<?=escape1($a)?>
<?php endforeach; ?>

</body>
</html>