<!DOCTYPE html>
<html>
<head>
    <title>Animal Legs Calculator</title>
</head>
<body>
    <h2>Farmer's Animal Legs Calculator</h2>
    <form method="post">
        Chickens: <input type="number" name="chickens" min="0" required><br><br>
        Cows: <input type="number" name="cows" min="0" required><br><br>
        Pigs: <input type="number" name="pigs" min="0" required><br><br>
        <input type="submit" value="Calculate Legs">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chickens = (int)$_POST['chickens'];
        $cows = (int)$_POST['cows'];
        $pigs = (int)$_POST['pigs'];
        $totalLegs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);
        echo "<h3>Total number of legs: $totalLegs</h3>";
    }
    ?>
</body>
</html>
