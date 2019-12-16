<?php
class Shape {
    public function __construct(string $_color)
    {
        $this->color = $_color;
    }
    public function show(){
        return "My color of Triangle is $this->color ";
    }
}
