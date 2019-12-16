<?php
$numofint = [12,23,5,98,12,56,88,4];
    function findMin($numofint) {
       $min = $numofint[0];
       $index = 0;
    for ($i = 0 ; $i < count($numofint) ; $i++) {
        if($numofint[$i]<$min) {
            $min = $numofint[$i];
            $index = $i;
        }
        
    }
    return $index;
}
$value = findMin($numofint);
    echo "Index of min value is position:  $value";




?>