<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac<br>";
    } elseif ($i % 4 == 0) {
        echo "tic<br>";
    } elseif ($i % 5 == 0) {
        echo "tac<br>";
    } else {
        echo $i . "<br>";
    }
}

// Q2 多次元連想配列

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//問題1 多次元配列を用いた要素表示

echo( $personalInfos[1]['name']. "の電話番号は". $personalInfos[1]['tel'] ."です。<br>");

//問題2 foreachを用いた表示

foreach ($personalInfos as $key => $personalInfo) {
    echo ($key + 1 ). "番目の". $personalInfo['name']. "のメールアドレスは". 
        $personalInfo['mail']."で、電話番号は". $personalInfo['tel']. "です。<br>";
}


//問題3 foreachを用いた要素の追加

$ageList = [25, 30, 18];

foreach ($personalInfos as $key => $personalInfo) {
    $personalInfos[$key]['age'] = $ageList[$key];
}

var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName."は". $subject. "の授業に参加しました。学籍番号：". $this->studentId. "<br>";
    }
}

$Student1 = new Student(777, "大当");

echo "学籍番号". $Student1->studentId. "番の生徒は" .$Student1->studentName. "です。<br>";

// Q4 オブジェクト-2

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1 1ヶ月前の出力
$date = new DateTime();

$date->modify('-1month');

echo $date->format('Y-m-d')."<br>";

//問題2 日数の差分出力
$oldDate = new DateTime(1992-04-25);

$diff = $date->diff($oldDate);

echo "あの日から". $diff->days. "日経過しました。<br>";

?>