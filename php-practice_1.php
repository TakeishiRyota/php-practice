<?php
// Q1 変数と文字列

$name = "武石陵汰";

echo "私の名前は" . $name . "です";

// Q2 四則演算

$num = 5 * 4;

echo $num."\n";
echo $num / 2;

// Q3 日付操作

echo Date("現在時刻は、Y年m月d日 H時m分s秒です。");

// Q4 条件分岐-1 if文

$device = "windows";

if($device == "windows" || $device == "mac"){
    echo("使用OSは、". $device. "です。");
}else{
    echo("どちらでもありません。");
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
    "茨城県" => "水戸市",
    "群馬県" => "前橋市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "神奈川県" => "横浜市",
    "埼玉県" => "さいたま市",
    "東京都" => "新宿区",
];

foreach ($area as $areaPrefecture => $areaCapital) {
    echo $areaPrefecture. "の県庁所在地は、". $areaCapital. "です。\n";
}

// Q8 連想配列-2
foreach ($area as $areaPrefecture => $areaCapital) {
    if ($areaPrefecture === "埼玉県") {
        echo $areaPrefecture. "の県庁所在地は、". $areaCapital . "です。\n";
    }
}

// Q9 連想配列-3

$area["北海道"] = "札幌市";
$area["沖縄県"] = "那覇市";

foreach ($area as $areaPrefecture => $areaCapitallue) {
    if (in_array ($areaPrefecture, $prefecture)) {
        echo $areaPrefecture . "の県庁所在地は、" . $areaCapitallue.  "です。\n";
    } else {
        echo $areaPrefecture . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1

function hello($name) {
    echo "こんにちは！". $name. "さん\n";
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
echo $price. "円の商品の税込価格は". $taxInPrice. "円です。\n";

// Q12 関数とif文

function distinguishNum($num){
    if($num % 2 == 1){
        return $num. "は奇数です。\n";
    }else{
        return $num. "は偶数です。\n";
    }
}

$num1 = 11;
$resultparity1 = distinguishNum($num1);
echo $resultparity1;

$num2 = 24;
$resultparity2 = distinguishNum($num2);
echo $resultparity2;

// Q13 関数とswitch文

function evaluateGrade ($grade){
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。\n";
            break;
            
        case 'C':
            return "合格ですが追加課題があります。\n";
            break;
            
        case 'D':
            return "不合格です。\n";
            break;
        
        default:
            return "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}

$grade1 = "C";
$resultEvaluate1 = evaluateGrade($grade1);
echo $resultEvaluate1;

$grade2 = "F";
$resultEvaluate2 = evaluateGrade($grade2);
echo $resultEvaluate2;

?>