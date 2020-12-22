<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>口コミ</title>
</head>

<header>
    <div class="top">
      <h1 class="headline">
      <a>お土産の備忘録</a>
      </h1>
      <!-- <div class="upper_menu"> -->
        <div class="post">
          <buton class="posts" type="button">口コミを投稿</button>
        </div>
        <div class="searchArea" id="makeImg">
          <input type="text" id="inText" class="searchText">
          <div class="searchButton">
            <span>検索</span>
          </div>
        </div>
      <!-- </div> -->
    </div>
    <ul class="nav-list">
      <li>エリア</li>
      <li>ランキング</li>
      <li>シーン別</li>
    </ul>
  </header>

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
      購入場所<br>
      <input type="text" name="nickname" style="width:100px">
    </div>
    <div>
      タイトル<br>
      <input type="text" name="nickname" style="width:100px">
    </div>
    <div>
      口コミ<br>
      <textarea name="content" cols="40" rows="7"></textarea>
    </div>
    <input type="submit" value="送信">
  </form>
</body>
</html>