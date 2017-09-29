<?php
mb_internal_encoding("UTF-8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root",""); 
//DBへの接続
$pdo->exec("insert into toshukatsu(name,free)values('".$_POST['name']."','".$_POST['free']."');");
//DBへの格納
header("Location:http://localhost/blog/keijiban/index.html");
?>