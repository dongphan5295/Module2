<?php
include_once ('Point2D.php');
class Point3D extends Point2D {
    public $z;
    public function __construct(float $x, float $y , float $z) {
        parent::__construct($x,$y);
        $this->z = $z;
    }
    public function getZ() {
        return $this->z;
    }
    public function setZ(float $newz) {
        $this->z = $newz;  
    }
    public function setXYZ(float $newx, float $newy,float $newz) {
        parent::setXY($newx,$newy);
        $this->z = $newz;
    }
    public function getXYZ(){
        $xyz = [parent::getX(),parent::getY(),$this->z];
        return $xyz;
    }
    public function toString() {
        return "Position x : $this->x,Position y : $this->y,Position z : $this->z";
    }
}
$point2d = new Point2D(2,3);
print_r($point2d->getXY());
echo "<br/>";
echo "X , Y is :".$point2d->toString()."<br/>";
$point3d = new Point3D(3,4,5);
print_r($point3d->getXYZ());
echo "<br/>";
echo "X , Y , Z is :".$point3d->toString()."<br/>";
?>