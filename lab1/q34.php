<?php
$showMarksheet = false;
$student = [];
$marks = [];
$total = 0;
$percentage = 0;
$grade = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $student['name'] = $_POST['name'];
    $student['roll_no'] = $_POST['roll_no'];
    $student['class'] = $_POST['class'];

   
    $subjects = ["Math", "Science", "English", "Nepali", "Social"];
    foreach ($subjects as $subject) {
        $marks[$subject] = intval($_POST[$subject]);
        $total += $marks[$subject];
    }

   
    $percentage = ($total / (count($subjects)*100)) * 100;

    
    if ($percentage >= 90) $grade = "A+";
    elseif ($percentage >= 80) $grade = "A";
    elseif ($percentage >= 70) $grade = "B+";
    elseif ($percentage >= 60) $grade = "B";
    elseif ($percentage >= 50) $grade = "C";
    else $grade = "F";

    $showMarksheet = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marksheet Generator</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 50%; margin: 20px 0; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        .center { text-align: center; }
    </style>
</head>
<body>
    <h2 class="center">Student Marksheet Form</h2>
    
    <form method="post" action="">
        Name:<br>
        <input type="text" name="name" required><br><br>
        Roll No:<br>
        <input type="text" name="roll_no" required><br><br>
        Class:<br>
        <input type="text" name="class" required><br><br>

        <h3>Enter Marks (out of 100)</h3>
        Math:<br><input type="number" name="Math" min="0" max="100" required><br><br>
        Science:<br><input type="number" name="Science" min="0" max="100" required><br><br>
        English:<br><input type="number" name="English" min="0" max="100" required><br><br>
        Nepali:<br><input type="number" name="Nepali" min="0" max="100" required><br><br>
        Social:<br><input type="number" name="Social" min="0" max="100" required><br><br>

        <input type="submit" value="Generate Marksheet">
    </form>

    <?php if ($showMarksheet): ?>
        <h2 class="center">Marksheet</h2>
        <table>
            <tr><th colspan="2">Student Information</th></tr>
            <tr><td>Name</td><td><?php echo $student['name']; ?></td></tr>
            <tr><td>Roll No</td><td><?php echo $student['roll_no']; ?></td></tr>
            <tr><td>Class</td><td><?php echo $student['class']; ?></td></tr>
        </table>

        <table>
            <tr>
                <th>Subject</th>
                <th>Marks Obtained</th>
            </tr>
            <?php foreach($marks as $subject => $mark): ?>
                <tr>
                    <td><?php echo $subject; ?></td>
                    <td><?php echo $mark; ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th>Total</th>
                <th><?php echo $total; ?></th>
            </tr>
            <tr>
                <th>Percentage</th>
                <th><?php echo number_format($percentage,2); ?>%</th>
            </tr>
            <tr>
                <th>Grade</th>
                <th><?php echo $grade; ?></th>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
