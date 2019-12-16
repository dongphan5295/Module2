<div id="content">
    <form action="caculator.php" method="POST">
        <div>
            <label>First</label>
            <input type="text" name="first">

            <label>Second</label>
            <input type="text" name="second">

            <select name="operator">
                <option selected="selected">Select caculator</option>
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