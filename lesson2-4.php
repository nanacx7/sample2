<?php include'header.php';?>
構文 if もし～なら
if(条件)｛波括弧で処理をくくる この中が条件に合致した場合のみ実行される。
｝
ここは条件と関係なく実行される

45p
比較演算子
false という値 偽の意味
true true という値 真の意味
'true' という文字

10進数 2進数 2から先がない世界
0        0
1        1                                                                                      
2        10
3        11 桁が上がる
9
10 桁が阿上がる

true,falssはbool型です
bool型は2つの値しかありません
これを表すのに2審数では何桁必要でしょうか？
０か１だけなので1桁です

<?php
  var_dump('a'== 1 ) ; // 値だけじゃなく式の結果も見れる

  var_dump( true == 1 ) ; //true 値としては等しい
  var_dump( true === 1 ); //false 型も含めると等しくない
  var_dump( 2 >= 2 ); // 2は2以上なのでtrue
  var_dump( 2 > 2 );  // 2は2より大きくないのでfalse

  var_dump( 2 <=> 2 ); 
  var_dump( 2 <=> 1 ); 
  var_dump( 1 <=> 2 ); 
