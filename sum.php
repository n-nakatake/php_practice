<?PHP
//文字の長さを取得する
$string = "ABCDEF";
echo strlen($string);
echo "\n";

//文字列を置換する
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
echo "\n";

//配列の要素の個数を取得する
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
echo "\n";

//配列をソート（並び替え）する
$array = array(2,3,5,8,7,6,4,1,9,10);
asort($array);  // 配列を昇順（小さい順）にソートする
print_r($array);
arsort($array);  // 配列を降順(大きい順)にソートする
print_r($array);

function sum($max){
    $result =0;
     
    for( $i = 1 ; $i <= $max; $i++){
     $result += $i;
    }
     
    return $result;
 }
 
 echo sum(100);