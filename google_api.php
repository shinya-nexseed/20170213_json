<?php
$json = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=鬼速PDCA');
$decode_data = json_decode($json, true);
echo '<pre>';
var_dump($decode_data);
echo '</pre>';

// 課題
// ①一件目の本のタイトルを取得し表示
// ②一件目の本の著者を取得し表示
// ③一件目の本の画像リンクを取得し表示（画像として）
// ④取得した本データ全件の上記データを表示
// ⑤本タイトル入力欄を設け、検索した本のデータが表示されるプログラム作成
?>