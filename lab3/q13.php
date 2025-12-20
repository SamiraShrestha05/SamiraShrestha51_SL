<?php
$host = "localhost";
$db = "bca_lab";
$user = "root"; 
$pass = "NewPass123";    

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = isset($_GET['username']) ? $_GET['username'] : '';

if(!empty($username)) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        echo "Username available";
    } else {
        echo "Username not found";
    }

    $stmt->close();
}
$conn->close();
?>
