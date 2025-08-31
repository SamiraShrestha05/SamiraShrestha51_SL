<?php
session_start();
$message = '';

if (isset($_COOKIE['username']) && !empty($_COOKIE['username'])) {
    $_SESSION['name'] = $_COOKIE['name'];
    $_SESSION['username'] = $_COOKIE['username'];
    header('location:q28Dashboard.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $err = [];
    
    $username = isset($_POST['username']) && trim($_POST['username']) !== '' ? $_POST['username'] : $err['username'] = 'Enter username';
    $password = isset($_POST['password']) && !empty($_POST['password']) ? $_POST['password'] : $err['password'] = 'Enter password';
    
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
                $_SESSION['name'] = $user['name'];
                $_SESSION['username'] = $user['username'];
                if (isset($_POST['remember'])) {
                    setcookie('name', $user['name'], time()+7*24*3600);
                    setcookie('username', $user['username'], time()+7*24*3600);
                }
                break;
            }
        }
        $message = $login ? '' : 'Login failed';
        if ($login) {
            header('location:q28Dashboard.php');
            exit();
        }
    }
}

if (isset($_GET['msg']) && $_GET['msg'] == 1) {
    $message = 'Please login to access your dashboard';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form with Session and Cookie</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 300px; margin: auto; }
        input[type="text"], input[type="password"] { width: 100%; padding: 8px; margin: 5px 0; }
        input[type="submit"] { width: 106%; padding: 8px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
        .message { text-align: center; margin-top: 20px; font-weight: bold; color: red; }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['msg']) && $_GET['msg'] == 1) {
    echo 'Please login to access your dashboard';
    }
    ?>
    <h2 style="text-align:center;">Login Form</h2>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>" required><br>
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
