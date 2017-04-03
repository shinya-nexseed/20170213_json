<?php
// jsonファイルから内容を取得
$json = file_get_contents('sample.json');
echo '<pre>';
var_dump($json);
echo '</pre>';

// jsonデータを配列にデコードする
$decode_data = json_decode($json, true); // trueを指定すると配列形式で取得する
echo '<pre>';
var_dump($decode_data);
echo '</pre>';

// nameキーの値を出力
echo $decode_data['name'];
echo $decode_data['gender'];
echo $decode_data['skills'][2];
echo $decode_data['skills'][3]['PHP'][1];
?>


