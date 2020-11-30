<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pizza Order Site</title>
</head>
<body>

<fieldset>
    <legend>Pizza order</legend>
    <form action="config.php" method="post">
        <br>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"> * <br><br>
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email"> * <br><br>
        <label>Birthday: </label>
        Year:
        <select name="year">
            <option value="" disabled selected>-</option>
            <?php
            $yearStart = 1950;
            $yearEnd = 2020;
            for ($i = $yearStart; $i <= $yearEnd; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select> *
        Month:
        <select name="month">
            <option value="" disabled selected>-</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
        </select> *
        Day:
        <select name="day">
            <option value="" disabled selected>-</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
        </select> * <br><br>
        <label for="pizzas">Pizzas:</label>
        <select name="Pizza" id="pizzas">
            <option value="" disabled selected>-</option>
            <option value="Hawaii" name="pizzas">Hawaii</option>
            <option value="Italiano" name="pizzas">Italiano</option>
            <option value="Mexican" name="pizzas">Mexican</option>
            <option value="Quadrosesoni" name="pizzas">Quadrosesoni</option>
        </select> *
        <hr>
        <p>Hawaii pizza = 450 RSD</p>
        <p>Italiano pizza = 230 RSD</p>
        <p>Mexican pizza = 250 RSD</p>
        <p>Quadrosesoni pizza = 340 RSD</p>
        <hr>
        <label>Amount:</label>
        <select name="amount">
            <option value="" disabled selected>-</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
        </select> * <br><br>
        <label>Payment:</label>
        <label for="cash">Cash</label>
        <input type="radio" id="cash" value="cash" name="payment">
        <label for="card">Card</label>
        <input type="radio" id="card" value="card" name="payment"> <br><br>

        <label for="comment">Comment:</label> <br><br>
        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>

        <p><b>Fields with * are required!</b></p>

        <input type="submit" value="Order" name="order">
        <input type="reset" value="Cancel" name="cancel">
        <br><br>
    </form>
</fieldset>
</body>
</html>

