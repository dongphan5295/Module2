<?php
include_once "Circle.php";
include_once "Square.php";
include_once "Cylinder.php";
include_once "Rectangle.php";

$shapes = [
    new Circle("Circle",5),
    new Square("Square",6),
    new Rectangle("Rectangle",5,8),
    new Cylinder("Cynlinder",4,6)
];
foreach($shapes as $shape){
    echo $shape->show() . '<br />';
    echo 'My area: ' . $shape->calculateArea() . '<br />';
    echo 'My perimeter: ' . $shape->calculatePerimeter() . '<br />';
    $rdSize = rand(1, 100);
    $shape->resize($rdSize);
    echo 'My area after resize ' . "$rdSize%: ". $shape->calculateArea() . '<br />';
    echo 'My perimeter after resize: ' . "$rdSize%: ". $shape->calculatePerimeter() . '<br />';
    echo "---<br>";  
}