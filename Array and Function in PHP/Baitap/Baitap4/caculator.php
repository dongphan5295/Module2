<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['first'] ?? 0;
    $second = $_POST['second'] ?? 0;
    $operator = $_POST['operator'];
    function divide(float $first, float $second, string $operator)
    {
        if ($second == 0.0 && $operator == 'Divide') {
            throw new Exception("Division by zero ");
        }
        $calc = [
            'Addition' => $first + $second,
            'Subtract' => $first - $second,
            'Multiplication' => $first * $second,
            'Divide' => $first / $second
        ];
        return $calc[$operator];
    }
    try {
        divide($first, $second, $operator);
    } catch (Exception $e) {
        echo 'Message : ' . $e->getMessage();
    }
    $result = divide($first, $second, $operator);

}
?>



    <div id="content">
        <h1>Simple Calculator</h1>
        <div id="data">
            <label>First Operand</label>
            <span><?php echo $first ?></span><br />
            <label>Second Operand</label>
            <span><?php echo $second ?></span><br />

            <label>Result</label>
            <span><?php echo $result; ?></span><br />

        </div>
    </div>

