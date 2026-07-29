<?php

class game {
    public $name;
    public $price;



public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
}

public function ApplyDiscount() {
    $newprice = $this->price - ($this->price * 0.25);
    $this->price = $newprice;
}

public function GetGameinfo() {
    echo "\nGame Name: ". $this->name ."\nGame Price: ". $this->price . "\n";
}
}
$game1 = new game("Minecraft", 29.9);
$game1->ApplyDiscount();
$game1->GetGameinfo();

$game2 = new game("Mario", 79.99);
$game2->GetGameinfo();

