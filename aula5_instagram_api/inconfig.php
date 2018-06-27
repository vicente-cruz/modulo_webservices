<?php
use MetzWeb\Instagram\Instagram;
$instagram = new Instagram(array
    (   'apiKey' => '<AppId>'
    ,   'apiSecret' => '<AppSecret>'
    ,   'apiCallback' => 'http://localhost/cursophp/modulo_webservices/aula5_instagram_api/callback.php'
    ));