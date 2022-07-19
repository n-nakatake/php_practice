<?PHP

//1
$name = "Naomi";
if ( $name === "Naoko" ) {
    echo "私は" .$name ."です";
} else {
    echo $name ."ではありません";
}
echo "\n";

//2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

//3
$fruits = array("peach","muscat","kiwifruit","strawberry","pineapple");
foreach ($fruits  as $index => $fruit) {
    echo $index+1 ."つ目の要素は" . $fruit;
    echo "\n";
}

//4
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}
