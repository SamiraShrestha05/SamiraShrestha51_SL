<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$err = [];
if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])) {
$username = $_POST['username'];
} else {
$err['username'] = 'Enter username';
}
if (isset($_POST['password']) && !empty($_POST['password'])) {
$password = $_POST['password'];
} else {
$err['password'] = 'Enter password';
}
$users = [
        ['name' =>'Admin', 'username' => 'Admin', 'password' => 'admin123'],
        ['name' => 'Manju Ghimire' ,'username' => 'Manju', 'password' => 'manju123'],
        ['name' => 'Aanju Tamang' ,'username' => 'Aanju', 'password' => 'aanju123'],
        ['name' => 'Sanju Gurung','username' => 'Sanju', 'password' => 'sanju123'],
        ['name' => 'Ranju Magar','username' => 'Ranju', 'password' => 'ranju123']
];
$login = false;
if (count($err) == 0) {
foreach($users as $user){
if ($username == $user['username'] && $password == $user['password']) {
$login = true;
session_start();
$_SESSION['name'] = $user['name'];
$_SESSION['username'] = $user['username'];
}
}
if ($login) {
header('location:q27dashboard.php');
} else {
echo 'Login failed';
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
    <?php
    if (isset($_GET['msg']) && $_GET['msg'] == 1) {
    echo 'Please login to access your dashboard';
    }
    ?>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 300px; margin: auto; }
        input[type="text"], input[type="password"] { width: 100%; padding: 8px; margin: 5px 0; }
        input[type="submit"] { width: 106%; padding: 8px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
        .message { text-align: center; margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Login Form</h2>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
    if (!empty($message)) {
        echo "<div class='message'>$message</div>";
    }
    ?>
</body>
</html>
