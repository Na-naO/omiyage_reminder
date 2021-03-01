<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>口コミ</title>
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
  <div class="comment">
    <h1>口コミを投稿</h1>
    <!-- form method="POST"👈入力する -->
    <form method="POST" action="check.php">
      <!-- <span style="color: red;">こんにちは</span> -->
      <div>
        ニックネーム
        <input type="text" name="nickname" style="width:100px">
      </div>
      <div>
        メールアドレス
        <input type="text" name="email" style="width: 200px">
      </div>
      <div>
        購入場所
        <input type="text" name="place" style="width:100px">
      </div>
      <!-- <div>
        シチュエーション<br>
        <input type="text" name="situation" style="width:100px">
      </div> -->
      <!-- <form method="post" action="check.php"> -->
        <p>シチュエーション</p>
        <input type="text" name="situation" list="situation">
        <datalist id="situation">
          <option value="出張">出張</option>
          <option value="帰省">帰省</option>
          <option value="近所・知り合いへ">近所・知り合いへ</option>
          <option value="自分用">自分用</option>

        </datalist>
      <!-- </form> -->

      <div>
        タイトル
        <input type="text" name="title" style="width:100px">
      </div>
      <div>
        口コミ
        <textarea name="content" cols="40" rows="7"></textarea>
      </div>
      <input class="submit_button" type="submit" value="送信">
    </form>
  </div>
</body>
</html>