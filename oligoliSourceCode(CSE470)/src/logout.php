<?php
//error_reporting(E_ERROR);
session_start();
session_destroy();
header('Location: Home.php');
?>