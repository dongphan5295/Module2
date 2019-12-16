<?php
class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed ;
    private $on;
    private $radius;
    private $color ;
    function __construct() {
        $this->speed = Fan::SLOW;
        $this->radius = 5;
        $this->on = false;
        $this->color = 'Blue';
    }
    public function getSpeed(){
            return $this->speed;
        }
    public function getOn(){
            return $this->on;
        }
    public function getRadius(){
            return $this->radius;
        }
    public function getColor(){
            return $this->color;
        }
    public function setSpeed($speed){
        if($speed === 1){
            $this->speed = Fan::SLOW;
        }
        if($speed === 2){
            $this->speed = Fan::MEDIUM;
        }
        if($speed === 3){
            $this->speed = Fan::FAST;
        }
        $this->speed = $speed;
    }
    public function setOn($on){
        $this->on = $on;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function toString(){
        if($this->getOn() ===false ){
            return " Fan is off .". "Color : " . $this->getColor()." Radius : ".$this->getRadius()."  " ;
        } else {
            // var_dump($this->speed);
            return " Fan is on ." . " Speed : " . $this->getSpeed() ." Color ". $this->getColor()." Radius : ". $this->getRadius();
        }
    }
}
$fan1 = new Fan();
$fan2 = new Fan();
$fan1->setOn(true);
$fan1->setSpeed(Fan::FAST);
$fan1->setColor('Yellow');
$fan1->setRadius(10);
// $fan1->getOn();
// $fan1->getSpeed();
// $fan1->getRadius();
// $fan1->getColor();

$fanlast = $fan1->toString();
echo "$fanlast <br>";
$fan2->setColor('Blue');
$fan2->setRadius(5);
$fan2->setOn(false);
// $fan2->getOn();
// $fan2->getRadius();
// $fan2->getColor();
$fanlast2 = $fan2->toString();
echo $fanlast2;

?>