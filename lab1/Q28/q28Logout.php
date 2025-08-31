<?php
session_start();
session_destroy();
setcookie('username',null,time()-1);
setcookie('name',null,time()-1);
header('location:q28Login.php');
?>