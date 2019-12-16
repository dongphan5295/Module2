<?php 
$score = array(
    [12,3,5,87],
    [31,45,7,0],
    [15,72,8,10],
    [12,13,14,100],
    [1,67,12,66]
);
// print_r($score);

function findMax($score) {
    $max = $score[0][0];
    for ($i = 0; $i < count($score);$i++) {
        for ($j = 0; $j < count($score[$i]);$j++) {
            if($score[$i][$j] > $max) {
                $max = $score[$i][$j];
            }
        }
    }
    return $max;
}
$value = findMax($score);
echo "Max value of array is : $value";
?>
