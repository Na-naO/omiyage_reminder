<?php

  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $place = htmlspecialchars($_POST['place']);
  $situation = htmlspecialchars($_POST['situation']);
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);

  if($nickname == ''){
    $nickname_result = 'ニックネームが入力されていません。';
  } else {
    $nickname_result = $nickname. '様';
  }

  if($email == ''){
    $email_result = 'メールアドレスが入力されていません。';
  } else {
    $email_result = 'メールアドレス：'. $email;
  }

  if($place == ''){
    $place_result = '購入場所が入力されていません。';
  } else {
    $place_result = '購入場所：' . $place;
  }

  if ($situation ==''){
    $situation_result = 'シチュエーションが入力されていません。';
  } else {
    $situation_result = 'シチュエーション：' . $situation;
  }

  if($title ==''){
    $title_result = 'タイトルが入力されていません。';
  } else {
    $title_result = 'タイトル：' . $title;
  }

  if($title ==''){
    $content_result = '口コミが入力されていません。';
  } else {
    $content_result = '口コミ：' . $title;
  }
  

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容確認</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $nickname_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo $place_result; ?></p>
  <p><?php echo $situation_result; ?></p>
  <p><?php echo $title_result; ?></p>
  <p><?php echo $content_result; ?></p>

  <form method="POST" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="place" value="<?php echo $place; ?>">
    <input type="hidden" name="situation" value="<?php echo $situation; ?>">
    <input type="hidden" name="title" value="<?php echo $title; ?>">
    <input type="hidden" name="content" value="<?php echo $content; ?>">

    <input type="button" value="戻る" onclick="history.back()">
    <?php if($nickname != '' && $email != '' && $place != '' && $situation != '' && $title != '' && $content != ''): ?>
      <input type="submit" value="OK">
    <?php endif; ?>

  </form>

</body>
</html>