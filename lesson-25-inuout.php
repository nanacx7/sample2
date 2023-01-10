<?php include 'header.php';
  // カラで送られた場合に条件分岐が必要
  if( isset($_GET['pet']) ){ //isset() はカラの場合false(警告を出さない)

    //イヌ、ウサギが選ばれました。
    foreach($_GET['pet'] as $pet){
      echo $pet . ',';
    }
      echo 'が選ばれました。';
  
    }else{
    // チェックしない場合に  とか出してください
    echo "選ばれませんでした";
    }


array(2){
  [0]=>
  string(6)"イヌ"
  [1]=>
  string(9)"ウサギ"
}