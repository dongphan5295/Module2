<?php
function isFA($male, $female)
{
    while (!$male->isEmpty() && !$female->isEmpty()) {
        $male->shift();
        $female->shift();
    }

    if(!$male->isEmpty() || !$female->isEmpty()){
        return "Have someone FA";
    } else {
        return "No one FA";
    }
}

$male = new SplQueue();
$male->push('Zet');
$male->push('Tien');
$male->push('Huu');
$male->push('Nguyen');

$female = new SplQueue();
$female->push('Si');
$female->push('Ly');
$female->push('Giang');
$female->push('Tu');
$female->push('Chau');
$female->push('Phuong');
echo isFA($male, $female);
