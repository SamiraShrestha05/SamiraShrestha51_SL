<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$err = [];
if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
$name = $_POST['name'];
if(!preg_match("/^([A-Z][a-z\s]+){2,10}$/",$name)){
$err['name'] = "Enter valid name";
}
} else {
$err['name'] = "Enter name";
}

if (isset($_POST['username']) && !empty($_POST['username']) && trim($_POST['username'])) {
$username = $_POST['username'];
} else {
$err['username'] = "Enter username";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
</head>
<body>
<form action="" method="post">
<label for="name">Name</label>
<input type="text" name="name" placeholder="Enter name"
value="<?php echo isset($name)?$name:'' ?>" />
<?php echo isset($err['name'])?$err['name']:''; ?>
<br />
<label for="username">Username</label>
<input type="text" name="username" placeholder="Enter username"
value="<?php echo isset($username)?$username:'' ?>" />
<?php echo isset($err['username'])?$err['username']:''; ?>
<br />
<input type="submit" value="Register">
</form>
</body>
</html>