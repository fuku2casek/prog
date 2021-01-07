<?php
//文字作成
$name = $_POST["name"];
$mail = $_POST["mail"];
$str = $name.",".$mail;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
// ファイルを変数に格納
$filename = 'data/data.txt';
// ファイルを読み込み変数に格納
$content = file_get_contents($filename);
// ファイルの中身を出力
echo $content;
fclose($file);
?>



<html>
<head>
<meta charset="utf-8">
<title>結果発表</title>
</head>
<body>
<table border='1'>
<tr><th>名前</th><th>見たい映画</th></tr>
<h1></h1>
<h2></h2>

<ul>
    
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>