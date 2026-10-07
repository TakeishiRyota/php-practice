<?php

//練習問題1

for($dan = 1; $dan <= 9 ; $dan++){
  for($retsu = 1; $retsu <= 9 ; $retsu++){
    $seki = $dan * $retsu;
    if($seki % 2 === 1){
      echo $seki;
    }else{
      echo "[E]";
    }
  }
  echo "\n";
}


class Pokemon {
  public $name;
  public $element;
  public $skills = [];

  public function __construct($name, $element, $skills = [])
  {
  $this->name = $name;
  $this->element = $element;
  $this->skills = $skills;
  }

  public function attack($skill)
  {
    if (in_array($skill, $this->skills, true)){
      echo "いけ、". $this->element."ポケモン". $this->name."！！". $skill. "！！\n";
    }else{
      echo "その技は覚えていません！\n";
    }
    echo "使える技一覧：". implode(",", $this->skills). "\n";
  }

}

  
$Heatran = new Pokemon("ヒードラン", "ほのお・はがね", ["マグマストーム", "ラスターカノン", "だいちのちから", "テラバースト"]);

$Heatran->attack("マグマストーム");
$Heatran->attack("さばきのつぶて");