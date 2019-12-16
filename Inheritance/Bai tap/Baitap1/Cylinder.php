<?php
include_once ('Circle.php');
class Cylinder extends Circle{
    public $height;
    public function __construct($color,$radius,$height){
        parent::__construct($color,$radius);
        $this->height = $height;
    }
    public function getVolume()
    {
        return parent::getArea()* $this->height;
    }
    public function toString()
    {
        return "Cylinder include : Color is : $this->color, Radius is : $this->radius , Height is : $this->height";
    }
}
$circle = new Circle('Yellow',6);
$result1 = $circle->toString();
echo $result1."<br/>";
echo "Circle area is ".$circle->getArea()."<br/>";
$cylinder = new Cylinder('Blue',8,5);
$result2 = $cylinder->toString();
echo $result2."<br/>";
echo "Cylinder volume is ".$cylinder->getVolume();


?>
