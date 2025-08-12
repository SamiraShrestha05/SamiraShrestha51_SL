<?php
$students = [
0 => ['Ranju',75,'KTM'],
1 => ['Manju',87,'BRT'],
2 => ['Sanju',96,'LPT'],
3 => ['Nanju',23,'JPK']
];
?>
<h1>For Loop</h1>
<table border="1" style="margin-left:20%">
<tr>
<td>SN</td>
<td>Name</td>
<td>Roll</td>
<td>Address</td>
</tr>
<?php for($i=0;$i<count($students);$i++){ ?>
<tr>
<td><?php echo $i+1 ?></td>
<td><?php echo $students[$i][0] ?></td>
<td><?php echo $students[$i][1] ?></td>
<td><?php echo $students[$i][2] ?></td>
</tr>
<?php } ?>
</table>
<h2>Foreach</h2>
<table border="1" style="margin-left:20%">
<tr>
<td>SN</td>
<td>Name</td>
<td>Roll</td>
<td>Address</td>
</tr>
<?php foreach($students as $key => $student){ ?>
<tr>
<td><?php echo $key+1 ?></td>
<td><?php echo $student[0] ?></td>
<td><?php echo $student[1] ?></td>
<td><?php echo $student[2] ?></td>
</tr>
<?php } ?>
</table>