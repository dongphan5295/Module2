<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $index = $_POST['index'] ;
    $arr = array();
    function creatArray($arr)
    {
        for ($i = 0; $i < 100; $i++) {
            $arr[$i] = mt_rand(0, 100);
        }
        return $arr;
    }
    $newarr = creatArray($arr);
    print_r($newarr);
    try {
        if ($index < 0 || $index > 100) {
            throw new Exception('Chỉ số vượt quá giới hạn của mảng');
        } else {
            for ($i = 0; $i < count($newarr); $i++) {
                if ($index == $i) {
                    $result = $newarr[$i];
                }
            }
        }
    } catch (Exception $e) {
        echo 'Message : ' . $e->getMessage();
    }
}

?>
<div id="content">
    <div>
        <label>Enter index</label>
        <span><?php $index ?></span>
    </div>

    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Find" /><br />
        <label>Result:</label>
        <span><?php echo "Value of index $index is $result" ?></span>
    </div>
</div>