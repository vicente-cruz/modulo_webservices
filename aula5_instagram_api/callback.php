<?php

session_start();
require "instagramapi/Instagram.php";
require "inconfig.php";

if (isset($_GET['code'])) {
    $code = filter_input(INPUT_GET,'code');
    $_SESSION['in_access_token'] = $instagram->getOAuthToken($code);
}

header("Location: index.php");