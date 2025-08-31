<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Info Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Information Table</h2>
    <table>
        <tbody>
            <?php
            foreach ($info as $key => $value) {
                $keyFormatted = ucfirst($key);
                echo "<tr><th>$keyFormatted</th><td>$value</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
