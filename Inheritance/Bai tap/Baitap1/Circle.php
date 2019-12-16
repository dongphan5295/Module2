<?php
class Circle {
    public $radius ;
    public $color ;
    function __construct($color,$radius){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getColor() {
        return $this->color;
    }
    public function getArea(){
        return pi() * pow($this->radius, 2);
    }
    public function toString() {
        return "Circle include : Color : $this->color , Radius :  $this->radius" ;
    }

}
?>