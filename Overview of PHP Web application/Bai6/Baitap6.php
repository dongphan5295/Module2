<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ứng dụng chuyển đổi tiền tệ</title>
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
        <h1>Ứng dụng chuyển đổi tiền tệ</h1>
        <form method="post">
            <div id="data">
                <label>Số tiền muốn quy đổi ($)</label>
                <input type="text" name="usd" placeholder="Enter your amount of money" /> $<br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Tính tiền" /><br />
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $usd = $_POST["usd"];
                $rate = 23000;
                $vnd = $usd * $rate;
                echo "Số tiền đổi được = $vnd VND";
            }
            ?>

        </form>
    </div>

</body>

</html>