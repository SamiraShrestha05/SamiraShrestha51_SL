<?php
$interest = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $principal = floatval($_POST['principal']);
    $rate = floatval($_POST['rate']);
    $time = floatval($_POST['time']);

    $interest = ($principal * $rate * $time) / 100;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h2>Simple Interest Calculator</h2>
    <form method="post" action="">
        Principal Amount:<br>
        <input type="number" name="principal" step="0.01" required><br><br>
        Rate of Interest (%):<br>
        <input type="number" name="rate" step="0.01" required><br><br>
        Time (years):<br>
        <input type="number" name="time" step="0.01" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($interest !== "") {
        echo "<h3>Simple Interest: $interest</h3>";
    }
    ?>
</body>
</html>
