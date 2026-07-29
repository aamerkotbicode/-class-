<?php
class hero {
public $name;
public $Power;
function __construct($name, $Power) {
    $this->name = $name;
    $this->Power = $Power;
}
function Introduce() {
echo "\nThe Hero's Name: " . $this->name . "\nAnd his Superpower is: " . $this->Power ."\n\n";
}
}

$hero1 = new hero("Ja'far", "Flying");
$hero1->Introduce();

$hero2 = new hero("Zayd", "Faith");
$hero2->Introduce();

$hero3 = new hero("Abdullah", "Poetry");
$hero3->Introduce();