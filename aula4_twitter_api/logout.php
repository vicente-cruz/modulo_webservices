<?php
session_start();
unset($_SESSION['tw_access_token']);
header("Location: index.php");
?>