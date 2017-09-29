<?php
mb_internal_encoding("utf8");
//エンコード
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root",""); 
//DBへの接続
$stmt = $pdo->query("select * from toshukatsu");
//DBから情報取得(select文)
?>

<!doctype html> 
<html>
<head>
 <meta charset="utf-8">
  <title>受験・就活対策</title>
  <meta name='viewport' content="width=device-width">
 <!--ビューボートの設定(各種デバイスの画面サイズに合わせてWebページを表示する)-->

 <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> 
 <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
 <!--------------------box1-------------------->
        <div class="site">
            <img src="From juken To shukatsu.png" width="300px">
        </div>
        
        <!--------------------box2-------------------->
        <div class="box2">
            <nav class="menu">
                <ul>
                    <li><a href="#">プロフィール</a></li>
                    <li><a href="../../../blog/index.html">勉強を教えない塾</a></li>
                  <li><a href="#">内定を目指さない就職対策</a></li>
                    <li><a href="../../../blog/mailform/index.html">問い合わせ</a></li>
                    <li><a href="index.php">掲示板</a></li>
                </ul>
            </nav>
        </div>
        <!--------------------boxA-------------------->

 <!--maincontents -->
 <div class="maincontents">
    
 <!-- leftside -->
 <div class="leftside">
  <h1>掲示板</h1>
  <h2>掲示板書き込み</h2> 
  下記に名前とコメントを入力し「登録」をクリックしてください。
 <form method="post" action="insert.php"> 
  <p>
  名前<br>
  <input type="text" size="30" name="name"/>
  </p>
  <p>
  コメント<br>
  <textarea name="free" cols="80" rows="5"></textarea> 
  </p>
  <p>
  <input type="submit" value=" 登録する "/> 
  </p>
 </form>

 <?php while($row=$stmt->fetch()){$name=$row['name'];   $free=$row['free'];
 ?>
 <div class="commentbox">
 <div class="commentbox-name">
  <?php echo $name; ?>
 </div> 
 <div class="commentbox-free">
 <?php echo $free; ?></div>
 </div>
 <?php }
 ?>
 </div>
<!-- leftside -->


 
 </div>
<!-- maincontents -->
<!-- footer部分 ここから-->
 <footer>
  copyright &copy; from juken to shukatsu.
 </footer>
<!-- footter部分 ここまで-->
</body> 
</html>