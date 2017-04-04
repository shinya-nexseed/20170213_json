<?php
$json = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=鬼速PDCA');
$decode_data = json_decode($json, true);

  
// 課題
// ①一件目の本のタイトルを取得し表示
echo $decode_data['items'][0]['volumeInfo']['title'];
echo '<br>';

// ②一件目の本の著者を取得し表示
echo $decode_data['items'][0]['volumeInfo']['authors'][0];
echo '<br>';

// ③一件目の本の画像リンクを取得し表示（画像として）
$image = $decode_data['items'][0]['volumeInfo']['imageLinks']['smallThumbnail'];
echo '<img src="' . $image . '">';

// ④取得した本データ全件の上記データを表示


// ⑤本タイトル入力欄を設け、検索した本のデータが表示されるプログラム作成

echo '<pre>';
var_dump($decode_data);
echo '</pre>';
?>

<?php for($i=0; $i < count($decode_data['items']); $i++): ?>
  <?php echo $decode_data['items'][$i]['volumeInfo']['title']; ?>
  <?php if(!empty($decode_data['items'][$i]['volumeInfo']['authors'][0])): ?>
      <?php echo $decode_data['items'][$i]['volumeInfo']['authors'][0]; ?>
  <?php endif; ?>
  <img src="<?php echo $decode_data['items'][$i]['volumeInfo']['imageLinks']['smallThumbnail']; ?>"><br>
<?php endfor; ?>

<!-- foreach -->
<?php
$items = $decode_data['items'];
// $count = count($decode_data['items']);
foreach ($items as $item) {
    // $item が $decode_data['items'][$i] と等しい
    echo $item['volumeInfo']['title'];
    if (!empty($item['volumeInfo']['authors'][0])) {
        echo $item['volumeInfo']['authors'][0];
    }
    echo '<br>';
    // 画像は省略
}
?>

















