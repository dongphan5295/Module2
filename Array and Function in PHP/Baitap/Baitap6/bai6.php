<form method="POST">
    <input type="text" name="size1" placeholder="enter the length of array">
    <input type="text" name="size2" placeholder="enter the length of array">
    <input type="submit" value="Make an array">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size1 = $_POST["size1"];
    $size2 = $_POST["size2"];
    $arr = [];

    for ($i = 0; $i < $size1; $i++) {
        for ($j = 0; $j < $size2; $j++) {
            $arr[$i][$j] = mt_rand(1, 100);
        }
    }
    print_r($arr);
    $min = $arr[0][0];
    foreach ($arr as $key => $value) {
        foreach ($arr[$key] as $key1 => $num) {
            if ($arr[$key][$key1] < $min) {
                $min = $arr[$key][$key1];
            }
        }
    }
    echo "<br/>";
    echo "The minimum value in this array is: $min";
}
?>