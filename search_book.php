<?php
// GET送信でデータを送りPHPで受け取る
// formタグ、inputタグ
// 文字列連結
// if文で条件分岐（検索したときとしてないとき）

$json = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=鬼速PDCA');
$decode_data = json_decode($json, true);
// 表示用の変数を３つ定義
$title = $decode_data['items'][0]['volumeInfo']['title'];
$authors = $decode_data['items'][0]['volumeInfo']['authors'][0];
$imageLink = $decode_data['items'][0]['volumeInfo']['imageLinks']['smallThumbnail'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form method="" action="">
    <input type="text" name="">
    <input type="submit" value="検索">
  </form>
  <div>
    <!-- 検索結果の最初の一件のみ表示 -->
    <p>本のタイトル : <?php echo $title; ?></p>
    <p>本の著者 : <?php echo $authors; ?></p>
    <img src="<?php echo $imageLink; ?>">
  </div>
</body>
</html>