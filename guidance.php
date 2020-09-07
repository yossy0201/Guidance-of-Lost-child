<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Guidance of lost child</title>
</head>

<body>
  <header>
    <h1 class="Guidance">迷子のご案内</h1>
  </header>

  
  <div class="container">
    <div id="img_unit">
    </div>
  </div>

  <p class="names">
  <?php
  echo "お名前を入力してください"
  ?>
  </P>

  <form>
  <input type="text" name="name" class="text-area">
  <input type="submit" value="検索する" class="serch-btn">
  </form>

  <div class="piyoko">
  <?php
  echo "名前：ピヨ子"
  ?><br>
  <?php
  echo "場所：愛知：名古屋市中村区"
  ?><br>
  <?php
  echo "特徴：人懐っこい、人が好き"
  ?>
  <img src="img/img1.jpg" alt="ピヨ子" title="ピヨ子" class="pic">
  </div>

  <div class="rin">
  <?php
  echo "名前：リン"
  ?><br>
  <?php
  echo "場所：岐阜：岐阜市"
  ?><br>
  <?php
  echo "特徴：警戒心が強い、よく鳴く"
  ?>
  <img src="img/img2.jpg" alt="リン" title="リン" class="pic">
  </div>

  <div class="mi">
  <?php
  echo "名前：ミー"
  ?><br>
  <?php
  echo "場所：愛知：春日井市"
  ?><br>
  <?php
  echo "特徴：木登りが好き、冷静"
  ?>
  <img src="img/img3.jpg" alt="ミー" title="ミー" class="pic">
  </div>

</body>
</html>