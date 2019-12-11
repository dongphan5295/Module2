<!DOCTYPE html>
<html lang="en">

<head>
    <title>Future Value Calculator</title>
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

<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <form method="POST">
            <div id="data">
                <label>Inventment Amount</label>
                <input type="text" name="inventment" value="<?php echo $_POST['inventment'] ?? '' ; ?>" /><br />

                <label>Yearly Interest Rate</label>
                <input type="text" name="rate" value="<?php echo $_POST['rate'] ?? '' ; ?>" /><br />

                <label>Number of Years</label>
                <input type="text" name="year" value="<?php echo $_POST['year'] ?? '' ; ?>" /><br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inventment = $_POST["inventment"];
                $rate = $_POST["rate"];
                $year = $_POST["year"];
                $future = 0;
                for($i = 1 ; $i <= $year;$i++){
                $oneyear = ($future + $inventment)* $rate;
                $future+=$oneyear;
                }
                $result = $future + $inventment;
                echo "Future Value Calculator = $result VND";
            }
            ?>

        </form>
    </div>

</body>

</html>