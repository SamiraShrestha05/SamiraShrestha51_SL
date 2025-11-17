<?php
session_start();
$message = "";
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}
function isValidPhone($phone) {
    return preg_match("/^[0-9]{10}$/", $phone);
}
function isValidDate($date) {
    $d = DateTime::createFromFormat("Y-m-d", $date);
    return $d && $d->format("Y-m-d") === $date;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $dob = $_POST['dob'];
    $phone = trim($_POST['phone']);

    if (strlen($username) < 8) {
        $message = "Username must be at least 8 characters long.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email address.";
    }
    elseif (!isValidDate($dob)) {
        $message = "Invalid date of birth. Format: YYYY-MM-DD";
    }
    elseif (!isValidPhone($phone)) {
        $message = "Phone number must be 10 digits.";
    }
    else {
        $_SESSION['users'][] = [
            'username' => $username,
            'email' => $email,
            'dob' => $dob,
            'phone' => $phone
        ];
        $message = "User registered successfully!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form method="post" action="">
        Username (min 8 chars):<br>
        <input type="text" name="username" required><br><br>

        Email:<br>
        <input type="email" name="email" required><br><br>

        Date of Birth (YYYY-MM-DD):<br>
        <input type="date" name="dob" required><br><br>

        Phone (10 digits):<br>
        <input type="text" name="phone" required><br><br>

        <input type="submit" value="Register">
    </form>
    <?php
    if (!empty($message)) {
        echo "<p>$message</p>";
    }
    if (!empty($_SESSION['users'])) {
        echo "<h3>Registered Users:</h3>";
        echo "<table border='1' cellpadding='5'>
                <tr><th>Username</th><th>Email</th><th>DOB</th><th>Phone</th></tr>";
        foreach ($_SESSION['users'] as $user) {
            echo "<tr>
                    <td>{$user['username']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['dob']}</td>
                    <td>{$user['phone']}</td>
                </tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
