<form method="POST">
    <div id="content">
        <label>Enter element want delete</label>
        <input type="text" name="element" placeholder="Enter element want delete">
    </div>
    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Search" /><br />
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $element = $_POST['element'];
    $arr = [12, 4, 21, 7, 64, 42, 0, 23, 1, 99];
    function findIndex($arr, $element)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($element == $arr[$i]) {
                $index = $i;
            }
        }
        return $index;
    }
    $index_del = findIndex($arr, $element);

    function deleteValue($arr, $index)
    {
        for ($i = $index; $i < count($arr); $i++) {
            $arr[$index] = $arr[$index + 1];
        }
        $arr[count($arr) - 1] = 0;
        return $arr;
    }
    $result = deleteValue($arr, $index_del);
    var_dump($result);
}

?>