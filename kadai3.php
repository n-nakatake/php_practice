<?PHP

//1　引数の2倍の値を返す
function twice($num){
    $result = $num * 2;
    return $result;
}
echo twice(100) . "\n";

//2 仮引数a+bの値を返す
function add($a, $b){
    $result = $a + $b;
    return $result;
}
echo add(20, 30) . "\n";

//3　仮引数全ての値をかけた値を返す
$array = array(1, 3, 5, 7, 9);
function allMul($array){
    $result = $array[0];
    
    for( $i = 1 ; $i < count($array); $i++){
        $result *= $array[$i];
    }
    return $result;
}
echo allMul($array) . "\n";


//4 配列の中で一番大きい数字を返す
function maxArray($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($a > $max_number) {
            $max_number = $a;
        }
    }
    return $max_number;
}

$numbers = [1000, 780, 5, 1058, 23, 2, 8, 10, 608, 7];
echo maxArray($numbers) . "\n";

//5 ビルトイン関数
//-----strip_tags-----
$str = "<h1>Batty's coffee stand</h1> <p>あなたに最高のコーヒーを提供します。</p>";
//その１　文字列からタグを取り除く
echo strip_tags ( $str ). "\n";
//その２　取り除かないタグを指定
echo strip_tags( $str, '<p>' ). "\n";

//-----array_push-----
//配列の最後に1つ以上の要素を追加する
$days = array("Sun","Mon","Tue","Wed","Thu");
array_push($days,"Fri","Sat");
foreach($days as $day){
    echo $day. "\n";     //echoで出力
}
print_r($days). "\n";    //print_rで出力

//-----array_merge-----
//配列の要素の最後にひとつまたは複数の配列を結合する
//通常の配列の場合
$area1 = array("福岡県", "長崎県", "佐賀県", "熊本県");
$area2 = array("大分県", "宮崎県", "鹿児島県", "沖縄県");
//配列を結合する
$areas = array_merge($area1, $area2);
foreach($areas as $area){
    echo $area. "\n";     //echoで出力
}
print_r($areas). "\n";    //print_rで出力
//連想配列の場合
$area1 = array("福岡県"=>"ラーメン", "長崎県"=>"カステラ");
$area2 = array("大分県"=>"とり天", "宮崎県"=>"チキン南蛮", "鹿児島県"=>"黒豚");
$areas = array_merge($area1, $area2);
foreach($areas as $area){
    echo $area. "\n";     //echoで出力
}
print_r($areas). "\n";    //print_rで出力

//-----time-----
//現在日時のタイムスタンプを取得する
//現在日時のUNIXタイムスタンプ
echo time(). "\n"; 
//UNIXタイムスタンプから日付を取得
$timestamp = time(); //タイムスタンプ
echo date('Y年m月d日 H時i分s秒', $timestamp). "\n";

//-----mktime-----
//任意の日時のタイムスタンプを取得する(1970年1月1日0時0分から数えた通算の秒数のこと)
//mktime(hour時間,minute分,second秒, month月, day日, year年, is_dstサマータイムフラグ(サマータイムの場合は1、違うなら0、不明の場合は-1));
//時間/
$time = mktime(8);
echo date('Y年m月d日h時i分s秒', $time) . "\n";
//時間、分、秒/
$time = mktime(10, 11, 12);
echo date('Y年m月d日h時i分s秒', $time) . "\n";
//時間、分、秒、月、日、年
$time = mktime(0, 0, 0, 7, 18, 2022);
echo date('Y年m月d日h時i分s秒', $time) . "\n";


//-----date-----
//指定された日時を任意の形式でフォーマットし、日付文字列を返す関数
//その１　第一引数にフォーマット文字列を指定し、第二引数は省略
echo date('Y/m/d') . "\n";
echo date('Y-m-d H:i:s') . "\n";
echo date('Y年m月d日 H時i分s秒') . "\n";
//その２　第二引数にUNIXタイムスタンプを指定
echo date('Y-m-d H:i:s', 10) . "\n";