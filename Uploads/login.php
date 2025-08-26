Login with Session 

Login.php

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
['name' =>'Admin Prasad', 'username' => 'Admin', 'password' => 'admin123'],
['name' => 'BCA User' ,'username' => 'Bca', 'password' => 'bca123'],
['name' => 'Ram Prasad' ,'username' => 'ram', 'password' => 'ram123'],
['name' => 'Hari Bahadur','username' => 'hari', 'password' => 'hari123'],
['name' => 'Shyam Rai','username' => 'shyam', 'password' => 'admin123']

];
$login = false;
//check number of error on $err array
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
//redirect to new page
header('location:dashboard.php');
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
</head>
<body>
<h1>Login Form</h1>
<?php
if (isset($_GET['msg']) && $_GET['msg'] == 1) {
echo 'Please login to access your dashboard';
}
?>
<form action="" method="post">
<label for="username">username</label>
<input type="text" name="username" placeholder="Enter username"
value="<?php echo isset($username)?$username:'' ?>" />
<?php echo isset($err['username'])?$err['username']:''; ?>
<br />
<label for="password">Password</label>
<input type="password" name="password" placeholder="Enter password"
value="<?php echo isset($password)?$password:'' ?>" />
<?php echo isset($err['password'])?$err['password']:''; ?>
<br />
<input type="submit" name="login" value="Login" />
</form>

</body>
</html>