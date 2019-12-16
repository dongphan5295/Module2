<div id="content">
    <form method="POST">
        <div>
            <label>Length of array</label>
            <input type="text" name="size" placeholder="Enter length of array">
        </div>

        <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Caculator" /><br />
    </div>

    </form>
</div>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $size = $_POST['size'];
    $arr = [];
    for($i = 0; $i < $size ; $i++) {
        for($j = 0; $j < $size ; $j++ ){
            $arr[$i][$j] = mt_rand(1,100);
        }
    }
    print_r($arr);
    $sum = 0;
    foreach($arr as $key => $value) {
        foreach($arr[$key] as $key1 => $value1) {
            if($key == $key1) {
                $sum += $arr[$key][$key1];
            }
        }

    }
    echo $sum;
}
 ?>