<?php
/*
これはドキュメントルート直下に置いたファイル
重要
1.phpはサーバーで動いてるのでドキュメントルートに縛られることなくどこでも参照できます → 「ディレクトリ参照」
ドキュメントルートが一番上じゃなくてC:が一番上(ルート)です
※ phpで / はC:のこと                 (サーバー内からの)
※ htmlで / は C:\xampp\htdocs のこと (ブラウザからの)
    ↑ 「URL参照」
*/ 
// $text = file_get_contents("../xampp-control.log");
$text = file_get_contents("C:\\xampp\\xampp-control.log");
var_dump($text);
?>
<img src="/abc.jpg" alt="">
<link rel="stylesheet" href="/style.css">

<?php
  echo "<img src=\"/abc.jpg\" >";

// "C:\\xampp ← "C:¥xampp この¥が\(バックスラッシュ)のこと
/*プログラミングの基本
  バックスラッシュには記号を文字にする役目がある
  このことをエスケープといいます
  コード的に意味のある記号のことをメタ文字といいます
*/

// xampp-control.log ← 開始終了の時刻が保存されてるログ
