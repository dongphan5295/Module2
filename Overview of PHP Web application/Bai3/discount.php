<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descript = $_POST["descript"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $amount = $price * $discount * 0.01;
    $sale = $price - $amount;
}
?>

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
        <h1>Product Discount Calculator</h1>
        <div id="data">
            <label>Product Description</label>
            <span><?php echo $descript ?></span><br />

            <label>List Price</label>
            <span><?php echo $price ?></span><br />

            <label>Discount Percent</label>
            <span><?php echo $discount ?></span><br />

            <label>Discount Amount</label>
            <span><?php echo $amount ?></span><br />

            <label>Discount Price</label>
            <span><?php echo $sale ?></span><br />
        </div>

    </div>

</body>

</html>