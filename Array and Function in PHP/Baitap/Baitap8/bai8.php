<?php
$word = 'o';
$string = 'Hello Codegym Morning class everybody';
$newstring = preg_replace('/\s+/', '', $string);
$newstring1 = strtolower($newstring);
// echo $newstring1;
function countWord($newstring1,$word){
$count = 0;
for ($i = 0;$i<strlen($newstring1);$i++) {
if($word == $newstring1[$i]) {
    $count++;
}
}
return $count;
}
$valuecount = countWord($newstring1,$word);
echo $valuecount;