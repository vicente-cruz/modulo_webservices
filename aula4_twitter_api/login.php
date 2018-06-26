<?php
session_start();
require 'twconfig.php';
require 'twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET);

// usando o proxy
//$connection->setProxy(
//    ['CURLOPT_PROXY' => '10.76.64.14'
//    ,'CURLOPT_PROXYUSERPWD' => ''
//    ,'CURLOPT_PROXYPORT' => 3128
//]);

$request_token = $connection->oauth('oauth/request_token', array(
    'oauth_callback' => OAUTH_CALLBACK
));

$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

$url = $connection->url('oauth/authorize', array(
    'oauth_token' => $request_token['oauth_token']
));

header("Location: ".$url);