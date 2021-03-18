<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>

  <header>
    <div class="top">
      <h1 class="headline">
      <a>お土産の備忘録</a>
      </h1>
      <div class="post">
        <buton onclick="location.href='./comment_post.php'" class="posts" type="button">口コミを投稿</button>
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

  <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/pexels-photo-4966174.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/pexels-photo-4966176.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/pexels-photo-4966180.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <span>
      <div class="button">
        <a href="" class="btn-gradient-radius">お気に入り登録</a>
      </div>
      <div class="review">
        <a href="" class="btn-gradient-radius">レビューを見る</a>
      </div>
    </span>
    
    <div class="location"></div>
  </main>


  <textarea name="explanation" cols="150" rows="20"></textarea>


  <footer>
    <div class="other_items">
     <p>問い合わせ</p>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>