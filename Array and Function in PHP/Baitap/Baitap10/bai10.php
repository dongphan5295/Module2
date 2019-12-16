<form method="POST">
    <label>Length 1</label>
    <input type="text" name="size1">

    <label>Length 2</label>
    <input type="text" name="size2">

    <label>Collum to caculator sum</label>
    <input type="text" name="collum">

    <label>Calculator of collum</label>
    <input type="submit" value="Calculator">
</form>
<table border="5">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $size1 = $_POST['size1'];
    $size2 = $_POST['size2'];
    $collum = $_POST['collum'];
    $arr = [];

    for ($i = 0; $i < $size1; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $size2; $j++) {
            $arr[$i][$j] = mt_rand(1, 100);
           echo "<td>". $arr[$i][$j] . "</td>" ;
        }
        echo "</tr>";
    }
    // print_r($arr);

    function calcuCollum($arr, $collum, $size1, $size2)
    {
        $sum = 0;
        if ($collum >= $size2) {
            throw new Exception('Not exist this collum');
        } else {
            for ($i = 0; $i < $size1; $i++) {
                $sum += $arr[$i][$collum];
            }
            return $sum;
        }
    }
    $result = calcuCollum($arr, $collum, $size1, $size2);
    try {
        $result;
    } catch (Exception $e) {
        echo 'Message : ' . $e->getMessage();
    }
    echo "Sum of collum is : $result";
    
}
?>
</table>