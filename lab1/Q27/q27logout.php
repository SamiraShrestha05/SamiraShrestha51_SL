<?php
session_start();
session_destroy();
header('location:q27login.php');
?>