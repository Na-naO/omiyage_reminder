<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>口コミ</title>
</head>
<body>
  <h1>口コミを投稿</h1>
  <!-- form method="POST"👈入力する -->
  <form method="POST" action="check.php">
    <!-- <span style="color: red;">こんにちは</span> -->
    <div>
      ニックネーム<br>
      <input type="text" name="nickname" style="width:100px">
    </div>
    <div>
      メールアドレス<br>
      <input type="text" name="email" style="width: 200px">
    </div>
    <div>
      口コミ<br>
      <textarea name="content" cols="40" rows="5"></textarea>
    </div>
    <input type="submit" value="送信">
  </form>
</body>
</html>