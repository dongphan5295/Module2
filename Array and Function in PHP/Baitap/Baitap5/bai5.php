<?php
$arr1 = [2,12,9,11,34];
$arr2 = [4,5,0,12,45,7,20];
$arr3 = [];
for ($i = 0 ; $i < count($arr1);$i++) {
    $arr3[$i] = $arr1[$i];
}
// print_r($arr3);
for($i = 0 ; $i < count($arr2) ; $i++) {
    $arr3[count($arr3)] = $arr2[$i];
}
print_r($arr3);
?>