<?php
class Triangle extends Shape {
    private $side1 ;
    private $side2 ;
    private $side3 ;
    public function __construct($color){
        parent::__construct($color);
        $this->side1 = 1;
        $this->side2 = 1;
        $this->side3 = 1;
    }
    public function getSide1() : float {
        return $this->side1;
    }
    public function getSide2() : float {
        return $this->side2;
    }
    public function getSide3() : float {
        return $this->side3;
    }
    public function setSide1($newside1){
        $this->side1 = $newside1;
    }
    public function setSide2($newside2){
        $this->side2 = $newside2;
    }
    public function setSide3($newside3){
        $this->side3 = $newside3;
    }
    public function getPerimeter() :float {
        return $this->getSide1() + $this->getSide2() + $this->getSide3();    
    }
    public function getArea() :float {
        $semiperimeter = $this->getPerimeter() / 2;
        return sqrt($semiperimeter*($semiperimeter-$this->getSide1())*($semiperimeter-$this->getSide2())*($semiperimeter-$this->getSide3()));
    }
    public function __toString()
    {
        $info = parent::show();
        return "$info My side 1 = $this->side1, side 2 = $this->side2, side 3= $this->side3";
    }
}
?>