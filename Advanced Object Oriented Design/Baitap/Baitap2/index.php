<?php
include_once "Circle.php";
include_once "Square.php";
include_once "Cylinder.php";
include_once "Rectangle.php";

$shapes = [
    new Circle("Circle",3),
    new Square("Square",5),
    new Cylinder("Cylinder",4,8),
    new Rectangle("Rectangle",5,10)
];

foreach($shapes as $shape){
    echo $shape->show() . '<br />';
    echo 'My area: ' . $shape->calculateArea() . '<br />';
    if($shape instanceof Colorable){
        echo $shape->howToColor()."<br/>";
    }
    echo "---<br>";
}
?>