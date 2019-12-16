<?php
include_once ('Point.php');
class MoveablePoint extends Point {
    public $xSpeed;
    public $ySpeed;
    public function __construct(float $x ,float $y,float $xSpeed , float $ySpeed) {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed() {
        return $this->xSpeed;
    }
    public function getYSpeed() {
        return $this->ySpeed;
    }
    public function setXSpeed(float $newxSpeed){
        $this->xSpeed = $newxSpeed;
    }
    public function setYSpeed(float $newySpeed){
        $this->ySpeed = $newySpeed;
    }
    public function setSpeed(float $newxSpeed,float $newySpeed){
        $this->xSpeed = $newxSpeed;
        $this->ySpeed = $newySpeed;
    }
    public function getSpeed() {
        $xySpeed = [$this->xSpeed,$this->ySpeed];
        return $xySpeed;
    }
    public function toString() {
        return "Position x : $this->x , Position y: $this->y , xSpeed : $this->xSpeed , ySpeed : $this->ySpeed";
    }
    public function move() {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "New position x : $this->x , New position y : $this->y";
    }
}
$point = new Point(2.5,3.5);
print_r($point->getXY());
echo "<br/>";
echo $point->toString();
echo "<br/>";
$move = new MoveablePoint(4.5,6.5,10,20);
print_r($move->getSpeed());
echo "<br/>";
echo $move->toString();
echo "<br/>";
echo $move->move();

?>