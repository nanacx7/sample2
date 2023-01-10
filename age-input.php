<!-- 
1.エラーが出ないように直す←../がいらない(＜?php include '../header.php'; ?＞)

2.送信ボタンを押したら入力した値がprice-output.phpに渡されるようにする
  action属性の値を変える action="age-output.php"←action="price-output.php"

3.渡された値が画面に出るようにする 
  requireはincludeと同じですが、ファイルがないと処理を停止する
  ＜?php require'../header.php';?＞
  echo$_post['age'];

4.48pのif～elseを使って12歳以上なら"乗れる"未満なら"乗れない"と出してください
  ＜?php require 'header.php';
   $min_age 12 ; //乗れる乗れないの境界
   if($post['age']) >= $min_age ){
	echo '乗れる';
   }else{
    echo'乗れない';   
   }

5.52Pのif~elseifを使って年齢100歳以上は乗れないと追加してください
  '乗れない'方の条件を先に書けばうまくいく。
-->



<!-- １ -->
<?php include 'header.php'; ?>

<!-- ２ -->
<form action="price-output.php" method="post">
	
	<p>年齢 <input type="text" name="age"> 歳
	<p><input type="submit" value="送信">
</form>

<!-- ３ 
<?php require'../header.php';?>
  echo$_POST['age'];-->

<!-- ４・５ -->
<?php require 'header.php';
   $min_age = 12 ; //乗れる乗れないの境界
   $max_age = 100 ; //乗れる乗れないの境界
   if($_POST['age'] < $min_age ){ //12未満
	echo '乗れない';
   }elseif( $_POST['age'] >= $max_age){ //100歳以上ならここにくる
	echo'乗れない';
   }else{
	echo '乗れる'; //上2つがfalseの場合のみここにくる
   }

// if elseif else で1セット。上から判定されて、trueになったら処理抜ける。
// if($_POST['age'] >= $min_age && $_POST['age'] < $max_age){ 
// 	echo'乗れる';
// }else{
// 	echo'乗れない';    //それぞれ一回のこの書き方でもよい
// }

// AかつB Cの場所＝AandBで表す＝倫理積
// AまたはB A,B,Cの場所全部 ベン図＝AorBで表す＝倫理和