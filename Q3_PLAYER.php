<?php

class player {

private $name;
private $xp;
private $gold;

function __construct($name, $xp = 0, $gold = 100) {
    $this->name = $name;
    $this->xp = $xp;
    $this->gold = $gold;
}
public function setName($name) {
    $this->name = $name;
}
public function getName() {
    return $this->name;
}
public function setXp($xp) {
    if ($xp >= 0) {
        $this->xp = $xp;
    } else {
        echo "ERROR:Please enter a Positive Number.";
    }
}
public function getXp() {
    return $this->xp;
}
public function setGold($gold) {
    if ($gold >= 0) {
        $this->gold = $gold;
    } else {
        echo "ERROR:Please enter a Positive Number.";
    }
}
public function getGold() {
    echo "\nGold: " . $this->gold;
}
}
/*
محاولة استدعاء الخاصية للتأكد من خصوصية الكود

$playertest = new player("Test");
echo $playertest->gold; // PHP Fatal error:  Uncaught Error: Cannot access private property player::$gold
*/


//اختبار منع الارقام السالبة ورد خطأ اذا تم ادخالها
$playertest2 = new player("Test2");
$playertest2->setXp(10);
$playertest2->setGold(-10); //سالب 
//ERROR:Please enter a Positive Number.
