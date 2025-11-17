<?php
$tax = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $income = floatval($_POST['income']);
    $status = $_POST['status'];
    $gender = $_POST['gender'];

    $tax = 0;

    if ($status == "married") {
        if ($income <= 450000) {
            $tax = $income * 0.01;
        } elseif ($income <= 550000) {
            $tax = 450000*0.01 + ($income - 450000)*0.10;
        } elseif ($income <= 750000) {
            $tax = 450000*0.01 + 100000*0.10 + ($income - 550000)*0.20;
        } elseif ($income <= 1300000) {
            $tax = 450000*0.01 + 100000*0.10 + 200000*0.20 + ($income - 750000)*0.30;
        } else {
            $tax = 450000*0.01 + 100000*0.10 + 200000*0.20 + 550000*0.30 + ($income - 1300000)*0.35;
        }
    } elseif ($status == "unmarried") {
        if ($income <= 400000) {
            $tax = $income * 0.01;
        } elseif ($income <= 500000) {
            $tax = 400000*0.01 + ($income - 400000)*0.10;
        } elseif ($income <= 750000) {
            $tax = 400000*0.01 + 100000*0.10 + ($income - 500000)*0.20;
        } elseif ($income <= 1300000) {
            $tax = 400000*0.01 + 100000*0.10 + 250000*0.20 + ($income - 750000)*0.30;
        } else {
            $tax = 400000*0.01 + 100000*0.10 + 250000*0.20 + 550000*0.30 + ($income - 1300000)*0.35;
        }
    }

   
    if ($gender == "female") {
        $tax = $tax * 0.9;
    }

    $tax = number_format($tax, 2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Income Tax Calculator</title>
</head>
<body>
<h2>Income Tax Calculator</h2>
<form method="post" action="">
    Annual Income:<br>
    <input type="number" name="income" step="0.01" required><br><br>

    Marital Status:<br>
    <select name="status" required>
        <option value="married">Married</option>
        <option value="unmarried">Un-Married</option>
    </select><br><br>

    Gender:<br>
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br><br>

    <input type="submit" value="Calculate Tax">
</form>

<?php
if ($tax !== "") {
    echo "<h3>Your calculated tax: $tax</h3>";
}
?>
</body>
</html>
