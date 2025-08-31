<?php
session_start();
if (!isset($_SESSION['username'])) {
header('location:q28Login.php?msg=1');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Page</title>
<style>
.button {
    background-color: red;
    color: white;
    border: none;
    padding: 5px 10px;
    text-decoration: none;
}
</style>
</head>
<body>
<h1>Dashboard</h1>
<p>Welcome <?php echo $_SESSION['name'] ?></p>
<a href="q28Logout.php"><input type="submit" class="button" value="Logout"></a>
</body>
</html>