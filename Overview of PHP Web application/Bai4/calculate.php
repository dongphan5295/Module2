<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operator = $_POST["operator"];
    $first1 = $_POST["first"];
    $second1 = $_POST["second"];

    class Calculator
    {
        public $first;
        public $second;
        public function __construct($first, $second)
        {
            $this->first = (int)$first;
            $this->second = (int)$second;
        }
        public function getAddition()
        {
            return $this->first + $this->second;
        }
        public function getSubtract()
        {
            return $this->first - $this->second;
        }
        public function getMultiplication()
        {
            return $this->first * $this->second;
        }
        public function getDivide()
        {
            if ($this->second !== 0) {
            return $this->first / $this->second;
            }
            return "Error";
        }
    }
}

$caculator = new Calculator($first1, $second1);
if (isset($operator)) {
    switch ($operator) {
        case 'Addition':
            $rs = $caculator->getAddition();
            break;
        case 'Subtract':
            $rs = $caculator->getSubtract();
            break;
        case 'Multiplication':
            $rs = $caculator->getMultiplication();
            break;
        case 'Divide':
            $rs = $caculator->getDivide();
            break;
    }
}
?>

    <body>

        <div id="content">
            <h1>Simple Calculator</h1>
            <div id="data">
                <label>First Operand</label>
                <span><?php echo $first1 ?></span><br />
                <label>Second Operand</label>
                <span><?php echo $second1 ?></span><br />

                <label>Result</label>
                <span><?php echo $rs; ?></span><br />

            </div>
        </div>

    </body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Simple Calculator</title>
        <style>
            #content {
                width: 450px;
                margin: 0 auto;
                padding: 0px 20px 20px;
                background: white;
                border: 2px solid navy;
            }

            h1 {
                color: navy;
            }

            label {
                width: 10em;
                padding-right: 1em;
                float: left;
            }

            #data input {
                float: left;
                width: 15em;
                margin-bottom: .5em;
            }

            #buttons input {
                float: left;
                margin-bottom: .5em;
            }

            br {
                clear: left;
            }

            .error {
                color: red;
            }
        </style>
    </head>