<?php

  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $place = htmlspecialchars($_POST['place']);
  $situation = htmlspecialchars($_POST['situation']);
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);


  $dsn = 'mysql:dbname=Omiyage_reminder;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');


$sql = 'INSERT INTO `posts`(`nickname`, `email`, `place`, `situation`, `title`, `content`) VALUES ("'.$nickname.'", "'.$email.'", "'.$place.'", "'.$situation.'", "'.$title.'", "'.$content.'")';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$dbh = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>送信完了</title>
</head>
<body>
  <h1>投稿をありがとうございました！</h1>
  <p>ニックネーム：<?php echo $nickname; ?></p>
  <p>メールアドレス：<?php echo $email; ?></p>
  <p>購入場所：<?php echo $place; ?></p>
  <p>シチュエーション：<?php echo $situation; ?></p>
  <p>タイトル：<? echo $title; ?></p>
  <p>口コミ：<? echo $content; ?></p>
</body>
</html>