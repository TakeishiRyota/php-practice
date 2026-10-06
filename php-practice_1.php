<?php
// Q1 変数と文字列

$name = "武石陵汰";

echo "私の名前は" . $name . "です";

// Q2 四則演算

$num = 5 * 4;

echo $num."<br>";
echo $num / 2;

// Q3 日付操作

echo Date("現在時刻は、Y年m月d日 H時m分s秒です。");

// Q4 条件分岐-1 if文

$device = "RedHat";

if($device == "windows"){
    echo("使用OSは、macです。");
}else{
    if($device == "mac"){
        echo("使用OSは、macです。");
    }else{
        echo("どちらでもありません。");
    }
}

// Q5 条件分岐-2 三項演算子

$age = 20;

$result = ($age >= 18) ? "成人" : "未成年";

echo $result;

// Q6 配列

$prefecture = ["茨城県","群馬県","栃木県","千葉県","神奈川県","埼玉県","東京都"];

echo $prefecture[2] . "と" . $prefecture[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1

$area = [
    "茨城県" => [
        "capital" => "水戸市",
        "region" => "関東"
        ],
    "群馬県" => [
        "capital" => "前橋市",
        "region" => "関東"
        ],
    "栃木県" => [
        "capital" => "宇都宮市",
        "region" => "関東"
        ],
    "千葉県" => [
        "capital" => "千葉市",
        "region" => "関東"
        ],
    "神奈川県" => [
        "capital" => "横浜市",
        "region" => "関東"
        ],
    "埼玉県" => [
        "capital" => "さいたま市",
        "region" => "関東"
        ],
    "東京都" => [
        "capital" => "新宿区",
        "region" => "関東"
        ],
];

echo $area["東京都"]["capital"]. "<br>";

echo $area["神奈川県"]["capital"]. "<br>";

echo $area["千葉県"]["capital"]. "<br>";

echo $area["埼玉県"]["capital"]. "<br>";

echo $area["栃木県"]["capital"]. "<br>";

echo $area["群馬県"]["capital"]. "<br>";

echo $area["茨城県"]["capital"]. "<br>";

// Q8 連想配列-2
foreach ($area as $key => $value) {
    if ($key === "埼玉県") {
        echo $key. "の県庁所在地は、". $value["capital"] . "です。<br>";
    }
}

// Q9 連想配列-3

$area["北海道"] = [
    "capital" => "札幌市",
    "region" => "北海道"
];

$area["沖縄県"] = [
    "capital" => "那覇市",
    "region" => "九州"
];

foreach ($area as $key => $value) {
    if ($value["region"] === "関東") {
        echo $key . "の県庁所在地は、" . $value["capital"] . "です。<br>";
    } else {
        echo $key . "は関東地方ではありません。<br>";
    }
}

// Q10 関数-1

function hello($name) {
    echo "こんにちは！". $name. "さん<br>";
}

hello("佐藤");
hello("田中");

// Q11 関数-2

function calcTaxInPrice($price) {
    $price = $price * 1.1;
    return $price;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price. "円の商品の税込価格は". $taxInPrice. "円です。<br>";

// Q12 関数とif文

function distinguishNum($num){
    if($num % 2 == 1){
        echo $num. "は奇数です。<br>";
    }else{
        echo $num. "は偶数です。<br>";
    }
}

$num1 = 11;
distinguishNum($num1);

$num2 = 24;
distinguishNum($num2);

// Q13 関数とswitch文

function evaluateGrade ($grade){
    switch ($grade) {
        case 'A':
        case 'B':
            echo("合格です。<br>");
            break;
            
        case 'C':
            echo("合格ですが追加課題があります。<br>");
            break;
            
        case 'D':
            echo("不合格です。<br>");
            break;
        
        default:
            echo("判定不明です。講師に問い合わせてください。<br>");
            break;
    }
}

$grade1 = "C";
evaluateGrade($grade1);

$grade2 = "F";
evaluateGrade($grade2);

?>