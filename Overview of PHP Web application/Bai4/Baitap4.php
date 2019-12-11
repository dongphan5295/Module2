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

<body>
    <div id="content">
        <h1>Simple Calculator</h1>
        <form action="calculate.php" method="POST">
            <div id="data">
                <label>First Operand</label>
                <input type="number" name="first" /><br />

                <label>Second Operand</label>
                <input type="number" name="second" /><br />

                <label>Operator</label>
                <select name="operator">
                    <option selected="selected" >Select caculator</option>
                    <option value="Addition">Addition( + )</option>
                    <option value="Subtract">Subtract( - )</option>
                    <option value="Multiplication">Multiplication( * )</option>
                    <option value="Divide">Division( / )</option>
                </select>

            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>

        </form>
    </div>

</body>

</html>