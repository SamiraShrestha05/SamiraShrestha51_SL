<!DOCTYPE html>
<html>
<head>
    <title>Football Points Calculator</title>
</head>
<body>
    <h2>Football Team Points Calculator</h2>
    <form method="post">
        Wins: <input type="number" name="wins" min="0" required><br><br>
        Draws: <input type="number" name="draws" min="0" required><br><br>
        Losses: <input type="number" name="losses" min="0" required><br><br>
        <input type="submit" value="Calculate Points">
    </form>
    <?php
    function calculatePoints($wins, $draws, $losses) {
        return ($wins * 3) + ($draws * 1) + ($losses * 0);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wins = (int)$_POST['wins'];
        $draws = (int)$_POST['draws'];
        $losses = (int)$_POST['losses'];
        $totalPoints = calculatePoints($wins, $draws, $losses);
        echo "<h3>Total Points: $totalPoints</h3>";
    }
    ?>
</body>
</html>
