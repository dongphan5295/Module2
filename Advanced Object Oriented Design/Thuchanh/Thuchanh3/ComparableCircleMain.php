<?php
// include "ComparableCircle.php";
// $circleOne = new ComparableCircle('circleOne', 8);
// $circleTwo = new ComparableCircle('circleTwo', 2);
// $circleThree = new ComparableCircle('circleThree', 4);
// $test = $circleOne->compareTo($circleTwo);
// echo ('Comparable: <br>');
// echo $test;

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 10);

var_dump($circleOne->compareTo($circleTwo));