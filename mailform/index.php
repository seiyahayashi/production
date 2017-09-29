<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root",""); //DBへの接続
$pdo->exec("insert into fromjuken(name)values('".$_POST['name']."');"); //DBへの格納
echo "登録が完了しました";

?>
