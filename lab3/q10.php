<?php

$validUser = "admin";
$validPass = "12345";


$userid = isset($_POST['userid']) ? $_POST['userid'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if($userid === $validUser && $password === $validPass){
    echo 'success';
} else {
    echo 'fail';
}
?>
