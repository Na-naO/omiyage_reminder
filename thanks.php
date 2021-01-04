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
  <link rel="stylesheet" href="style.css">
  <title>送信完了</title>
</head>
<body>
  <header>
    <div class="top">
      <h1 class="headline">
      <a>お土産の備忘録</a>
      </h1>
      <div class="post">
        <buton class="posts" type="button">口コミを投稿</button>
      </div>
      <div class="searchArea" id="makeImg">
        <input type="text" id="inText" class="searchText">
        <div class="searchButton">
          <span>検索</span>
        </div>
      </div>
    </div>
    <ul class="nav-list">
      <li>エリア</li>
      <li>ランキング</li>
      <li>シーン別</li>
    </ul>
  </header>

  <h1>投稿をありがとうございました！</h1>
  <p>ニックネーム：<?php echo $nickname; ?></p>
  <p>メールアドレス：<?php echo $email; ?></p>
  <p>購入場所：<?php echo $place; ?></p>
  <p>シチュエーション：<?php echo $situation; ?></p>
  <p>タイトル：<? echo $title; ?></p>
  <p>口コミ：<? echo $content; ?></p>
</body>
</html>