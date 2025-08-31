<?php
$students = [
    ["Rajesh", 25, 56, 89, 57, 64, 98, 364],
    ["Hari", 5, 56, 89, 57, 64, 98, 364],
    ["Shyam", 6, 54, 89, 57, 64, 98, 357],
    ["Rita", 10, 16, 54, 89, 57, 64, 323],
    ["Gita", 4, 56, 89, 57, 69, 98, 369],
    ["Sita", 24, 56, 99, 57, 24, 98, 334],
    ["Sita", 24, 56, 99, 57, 24, 98, 334],
    ["Sita", 24, 56, 99, 57, 24, 98, 334]
];
function getResult($total) {
    return ($total >= 350) ? "pass" : "fail";
}
echo "<h3>Mark Ledger</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr style='background:white; color:black;'>
        <th>SN</th><th>Name</th><th>Roll</th><th>Web Tech II</th>
        <th>DBMS</th><th>Economics</th><th>DSA</th><th>Account</th>
        <th>Total</th><th>Result</th>
    </tr>";
$sn = 1;
foreach ($students as $stu) {
    $result = getResult($stu[7]);
    $color = ($result == "pass") ? "green" : "red";

    echo "<tr style='background:$color;'>";
    echo "<td>$sn</td>";
    echo "<td>{$stu[0]}</td><td>{$stu[1]}</td><td>{$stu[2]}</td>
        <td>{$stu[3]}</td><td>{$stu[4]}</td><td>{$stu[5]}</td>
        <td>{$stu[6]}</td><td>{$stu[7]}</td><td>$result</td>";
    echo "</tr>";
    $sn++;
}
echo "</table>";
echo "<h3>Alternate color</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr style='background:white; color:black;'>
        <th>SN</th><th>Name</th><th>Roll</th><th>Web Tech II</th>
        <th>DBMS</th><th>Economics</th><th>DSA</th><th>Account</th>
        <th>Total</th><th>Result</th>
    </tr>";
$sn = 1;
foreach ($students as $stu) {
    $result = getResult($stu[7]);
    $rowColor = ($sn % 2 == 0) ? "gray" : "black"; 
    $resultColor = ($result == "pass") ? "green" : "red";
    echo "<tr style='background:$rowColor;color:white;'>";
    echo "<td>$sn</td>";
    echo "<td>{$stu[0]}</td><td>{$stu[1]}</td><td>{$stu[2]}</td>
        <td>{$stu[3]}</td><td>{$stu[4]}</td><td>{$stu[5]}</td>
        <td>{$stu[6]}</td><td>{$stu[7]}</td>
        <td style='background:$resultColor;'>$result</td>";
    echo "</tr>";
    $sn++;
}
echo "</table>";
?>
